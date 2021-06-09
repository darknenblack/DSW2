from flask import Flask, render_template,request,session,redirect,url_for
from flask_sqlalchemy import SQLAlchemy

app = Flask(__name__)
app.secret_key = "TRABWEB2"
#app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///C:\\Users\\Fer_s\\Desktop\\flask_app\\T2\\Test.db'
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:////tmp/Test.db'
app.config['SQLALCHEMY_TRACK_MODIFICATIONS'] = False
db = SQLAlchemy(app)
db.create_all()


class User(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    username = db.Column(db.String(80), unique=True, nullable=False)
    senha = db.Column(db.String(120), unique=True, nullable=False)

    def __repr__(self):
        return '<User %r>' % self.username

class Hotel(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    cnpj = db.Column(db.String(80), unique=True, nullable=False)
    nome = db.Column(db.String(120), unique=True, nullable=False)
    cidade = db.Column(db.String(120), unique=False, nullable=False)
    email = db.Column(db.String(120), unique=False, nullable=False)
    senha = db.Column(db.String(120), unique=False, nullable=False)

    def __repr__(self):
        return '<Nome %r>' % self.nome   

class Site(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    website = db.Column(db.String(80), unique=True, nullable=False)
    nome = db.Column(db.String(120), unique=True, nullable=False)
    cidade = db.Column(db.String(120), unique=False, nullable=False)
    email = db.Column(db.String(120), unique=False, nullable=False)
    senha = db.Column(db.String(120), unique=True, nullable=False)
    


    def __repr__(self):
        return '<Nome %r>' % self.nome     

class Promocao(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    nome = db.Column(db.String(120), unique=True, nullable=False)
    cidade = db.Column(db.String(120), unique=False, nullable=False)
    inicio = db.Column(db.String(120), unique=False, nullable=False)
    fim = db.Column(db.String(120), unique=False, nullable=False)
    descricao = db.Column(db.String(400), unique=False, nullable=False)
    avista = db.Column(db.String(10),unique=False,nullable=False)
    parcelado = db.Column(db.String(10),unique=False,nullable=False)
    url_img = db.Column(db.String(300),unique=False,nullable=False)
    website = db.Column(db.String(80), unique=False, nullable=False)

    def __repr__(self):
        return '<Promocao %r>' % self.nome

@app.route('/',methods=["GET","POST"])
def index():
    promocao = Promocao.query.all()
    return render_template('index.html', promocao = promocao)

    
@app.route('/login',methods=["GET","POST"])
def login():
    success = True
    session['role']= ""
    if not 'loged' in session:
        if request.method == "POST":
            if(request.form['login'] == 'admin' and request.form['password'] == 'admin'):
                session['loged'] = True
                session['role'] = "admin"
                return redirect(url_for('home'))    
            elif(request.form['login'] == 'hotel' and request.form['password'] == 'hotel'):
                session['loged'] = True
                session['role'] = "hotel"
                return redirect(url_for('home'))
            elif(request.form['login'] == 'site' and request.form['password'] == 'site'):
                session['loged'] = True
                session['role'] = "site"
                return redirect(url_for('home'))
            else: 
               success = False       
    else:
        return redirect(url_for('home'))
    return render_template('login.html', success=success, role=session['role'])   

@app.route('/home',methods=["GET","POST"])
def home():
    if not 'loged' in session:
        return redirect(url_for('login'))

    promocoes = Promocao.query.all()
    hoteis = Hotel.query.all()
    sites = Site.query.all()
  
    return render_template('home.html',promocoes=promocoes,hoteis=hoteis,sites=sites) 

@app.route('/hoteis',methods=["GET","POST"])
def hoteis():
    if not 'loged' in session:
        return redirect(url_for('login'))
    hoteis = Hotel.query.all()
  
    return render_template('hoteis.html',hoteis=hoteis) 

@app.route('/novohotel',methods=["GET","POST"])
def novohotel():
    success = ""
    error = {}
    if not 'loged' in session:
        return redirect(url_for('login'))
    if request.method == "POST":
        cnpj = request.form['cnpj'] 
        error['cnpj'] = "Campo vazio" if cnpj == "" else ""
        nome = request.form['nome']
        error['nome'] = "Campo vazio" if nome == "" else ""
        cidade = request.form['cidade']
        error['cidade'] = "Campo vazio" if cidade == "" else ""
        email = request.form['email']
        error['email'] = "Campo vazio" if email == "" else ""
        senha = request.form['senha']
        error['senha'] = "Campo vazio" if senha == "" else ""
        if ( ( list(error.values()).count("") == len(error.keys())) ):
            print("Salvou")
            hotel = Hotel(cnpj=cnpj,nome=nome,cidade=cidade,email=email,senha=senha)
            db.session.add(hotel)
            db.session.commit()
            success = "Cadastrado com sucesso"
  
    return render_template('novo-hotel.html',success=success, error=error) 

@app.route('/sites',methods=["GET","POST"])
def sites():
    if not 'loged' in session:
        return redirect(url_for('login'))
    allsites = Site.query.all()
  
    return render_template('sites-reserva.html',sites=allsites) 

@app.route('/novosite',methods=["GET","POST"])
def novosite():
    success = ""
    error = {}
    if not 'loged' in session:
        return redirect(url_for('login'))
    if request.method == "POST":
        website = request.form['website'] 
        error['website'] = "Campo vazio" if website == "" else ""
        nome = request.form['nome']
        error['nome'] = "Campo vazio" if nome == "" else ""
        cidade = request.form['cidade']
        error['cidade'] = "Campo vazio" if cidade == "" else ""
        email = request.form['email']
        error['email'] = "Campo vazio" if email == "" else ""
        senha = request.form['senha']
        error['senha'] = "Campo vazio" if senha == "" else ""
       
        if ( list(error.values()).count("") == len(error.keys())) :
            print("Salvou")    
            site= Site(website=website,nome=nome,cidade=cidade,email=email,senha=senha)
            db.session.add(site)
            db.session.commit()
            success = "Cadastrado com sucesso"
  
    return render_template('novo-sitereserva.html',success=success,error=error) 

@app.route('/novapromocao',methods=["GET","POST"])
def novapromocao():
    success = ""
    error = {}
    if not 'loged' in session:
        return redirect(url_for('login'))
    if request.method == "POST":
        nome = request.form['nome']
        error['nome'] = "Campo vazio" if nome == "" else ""
        cidade = request.form['cidade']
        error['cidade'] = "Campo vazio" if cidade == "" else ""
        inicio = request.form['inicio']
        error['inicio'] = "Campo vazio" if inicio == "" else ""
        fim = request.form['fim']
        error['fim'] = "Campo vazio" if fim == "" else ""
        descricao = request.form['descricao']
        error['descricao'] = "Campo vazio" if descricao == "" else ""
        avista = request.form['avista']
        error['avista'] = "Campo vazio" if avista == "" else ""
        parcelado = request.form['parcelado']
        error['parcelado'] = "Campo vazio" if parcelado == "" else ""
        url_img = request.form['url_img']
        error['url_img'] = "Campo vazio" if url_img == "" else ""
        website = request.form['website']
        error['website'] = "Campo vazio" if website == "" else ""
        if ( ( list(error.values()).count("") == len(error.keys())) ):
            print("Salvou")
            promocao = Promocao(nome=nome,cidade=cidade,inicio=inicio,fim=fim,descricao=descricao,avista=avista,parcelado=parcelado,url_img = url_img, website=website)
            db.session.add(promocao)
            db.session.commit()
            success = "Cadastrado com sucesso"
  
    return render_template('nova-promocao.html',success=success,error=error) 

@app.route('/logout',methods=["GET","POST"])
def logout():
    if not 'loged' in session:
        return redirect(url_for('login'))
  
    session.pop("loged",None)
    session.pop("role", None)
    return redirect(url_for('index'))  
