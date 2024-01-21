import pandas as pd
from flask import Flask
app = Flask(__name__)
@app.route("/")
def hello():
    df = pd.read_csv('cmaregraphe.csv', sep='[;\s]+')
    p = df.groupby(['Date','Hour'])['Niveau'].agg(['max','min','mean'])
    return p.to_html()
@app.route("/min")
def he():
    d = pd.read_csv('cmaregraphe.csv', '[;\s]+')
    o = d['Niveau'].min()
    return str(o)

@app.route("/max")
def h():
    l = pd.read_csv('cmaregraphe.csv', sep='[;\s]+')
    n = l['Niveau'].max()
    return str(n)

@app.route("/mean")
def hi():
    i = pd.read_csv('cmaregraphe.csv', sep='[;\s]+')
    u = i['Niveau'].mean()
    b = round(u, 3)
    return str(b)
if __name__=="__main__":
     app.run(debug=True)

#pour afficher les deux premier ligne seulement
'''@app.route("/")
def hello():
    df=pd.read_csv('cmaregraphe.csv', sep='[;\s]+')
    p = df.groupby(['Date','Hour'])['Niveau'].agg(['max','min','mean'])
    k=p.head(2);
    return str(k.to_html())'''
@app.route("/d")
def e():
   s=pd.DataFrame({
        "Name": ["Braund","Allen", "Bonnell"],
        "age": [22, 35, 58],
        "gender": ["male", "male", "female"],
   })
   return str(s.describe())