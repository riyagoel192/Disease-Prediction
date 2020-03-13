from flask import Flask,render_template,url_for,request
import pandas as pd
import numpy as np
import pickle
from sklearn.externals import joblib


app = Flask(__name__)

@app.route('/')
def home():
	return render_template('home.html')

@app.route('/predict',methods=['POST'])
def predict():
	df = pd.read_csv('heart.csv')

	# delete uncorrilated data
	df.drop(['age'], axis=1, inplace=True)
	df.drop(['sex'], axis=1, inplace=True)
	df.drop(['trestbps'], axis=1, inplace=True)
	df.drop(['fbs'], axis=1, inplace=True)
	df.drop(['restecg'], axis=1, inplace=True)
	df.drop(['exang'], axis=1, inplace=True)


	#df.rename(columns={"Wow... Loved this place.": "Review", "1": "sentiment"}, inplace=True)
	# Features and Labels
	y = df['target']
	x = df.drop(['target'], axis=1)

	#Logistic Regression Classifier
	from sklearn.linear_model import LogisticRegression
	lr = LogisticRegression()
	lr.fit(x, y)
	#Alternative Usage of Saved Model
	joblib.dump(lr, 'heart_disease.pkl')
	heart_disease_model = open('heart_disease.pkl','rb')
	clf = joblib.load(heart_disease_model)

	if request.method == 'POST':
		int_features = [float(x) for x in request.form.values()]
		final_features = [np.array(int_features)]
		my_prediction = clf.predict(final_features)
	return render_template('home.html',prediction = my_prediction)



if __name__ == '__main__':
	app.run(debug=True)