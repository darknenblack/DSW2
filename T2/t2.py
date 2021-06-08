from flask import Flask, render_template,request,session,redirect,url_for
from flask_sqlalchemy import SQLAlchemy

app = Flask(__name__)
app.secret_key = "TRABWEB2"
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:////tmp/test.db'
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
    cidade = db.Column(db.String(120), unique=True, nullable=False)
    email = db.Column(db.String(120), unique=True, nullable=False)
    senha = db.Column(db.String(120), unique=True, nullable=False)

    def __repr__(self):
        return '<Nome %r>' % self.nome   

class Site(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    website = db.Column(db.String(80), unique=True, nullable=False)
    nome = db.Column(db.String(120), unique=True, nullable=False)
    cidade = db.Column(db.String(120), unique=True, nullable=False)
    email = db.Column(db.String(120), unique=True, nullable=False)
    senha = db.Column(db.String(120), unique=True, nullable=False)

    def __repr__(self):
        return '<Nome %r>' % self.nome     

class Promocao(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    nome = db.Column(db.String(120), unique=True, nullable=False)
    cidade = db.Column(db.String(120), unique=True, nullable=False)
    inicio = db.Column(db.String(120), unique=True, nullable=False)
    fim = db.Column(db.String(120), unique=True, nullable=False)
    descricao = db.Column(db.String(400), unique=True, nullable=False)

    def __repr__(self):
        return '<Promocao %r>' % self.nome

@app.route('/',methods=["GET","POST"])
def index():
  
    return render_template('index.html')

    
@app.route('/login',methods=["GET","POST"])
def login():
    success = ""
    session['role']= ""
    if request.method == "POST":
            if(request.form['login'] == 'admin' and request.form['password'] == 'admin'):
                session['loged'] = "true"
                session['role'] = "admin"
                success="Logado com sucesso - " + session['role']
            elif(request.form['login'] == 'hotel' and request.form['password'] == 'hotel'):
                session['loged'] = "true"
                session['role'] = "hotel"
                success="Logado com sucesso -" + session['role']
            elif(request.form['login'] == 'site' and request.form['password'] == 'site'):
                session['loged'] = "true"
                session['role'] = "site"
                success="Logado com sucesso -" + session['role']
                
    return render_template('login.html',success = success, role=session['role'])   

@app.route('/home',methods=["GET","POST"])
def home():
    if not 'loged' in session:
        return redirect(url_for('login'))
  
    return render_template('home.html') 

@app.route('/hoteis',methods=["GET","POST"])
def hoteis():
    if not 'loged' in session:
        return redirect(url_for('login'))
    hoteis = Hotel.query.all()
  
    return render_template('hoteis.html',hoteis=hoteis) 

@app.route('/novohotel',methods=["GET","POST"])
def novohotel():
    success = ""
    if not 'loged' in session:
        return redirect(url_for('login'))
    if request.method == "POST":
        cnpj = request.form['cnpj'] 
        nome = request.form['nome']
        cidade = request.form['cidade']
        email = request.form['email']
        senha = request.form['senha']
        hotel = Hotel(cnpj=cnpj,nome=nome,cidade=cidade,email=email,senha=senha)
        db.session.add(hotel)
        db.session.commit()
        success = "Cadastrado com sucesso"
  
    return render_template('novo-hotel.html',success=success) 

@app.route('/sites',methods=["GET","POST"])
def sites():
    if not 'loged' in session:
        return redirect(url_for('login'))
    #hoteis = Hotel.query.all()
  
    return render_template('sites-reserva.html') 

@app.route('/novosite',methods=["GET","POST"])
def novosite():
    success = ""
    if not 'loged' in session:
        return redirect(url_for('login'))
    if request.method == "POST":
        website = request.form['website'] 
        nome = request.form['nome']
        cidade = request.form['cidade']
        email = request.form['email']
        senha = request.form['senha']
        site= Site(website=website,nome=nome,cidade=cidade,email=email,senha=senha)
        db.session.add(site)
        db.session.commit()
        success = "Cadastrado com sucesso"
  
    return render_template('novo-sitereserva.html',success=success) 

@app.route('/novapromocao',methods=["GET","POST"])
def novapromocao():
    success = ""
    if not 'loged' in session:
        return redirect(url_for('login'))
    if request.method == "POST":
        nome = request.form['nome']
        cidade = request.form['cidade']
        inicio = request.form['inicio']
        fim = request.form['fim']
        descricao = request.form['descricao']
        promocao = Promocao(nome=nome,cidade=cidade,inicio=inicio,fim=fim,descricao=descricao)
        db.session.add(promocao)
        db.session.commit()
        success = "Cadastrado com sucesso"
  
    return render_template('nova-promocao.html',success=success) 

@app.route('/logout',methods=["GET","POST"])
def logout():
    if not 'loged' in session:
        return redirect(url_for('login'))
  
    session.pop("loged",None)
    session.pop("role", None)
    return redirect(url_for('index'))  