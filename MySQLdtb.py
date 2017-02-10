import pymysql
db = pymysql.connect("localhost","root","orava1337","TESTI_DATABASE")
desibeli = 34
print(desibeli)
cursor = db.cursor()
command = "INSERT INTO TESTI_DATA (Arvo) VALUES (%s)"  % (desibeli)
print(command)
cursor.execute(command)
db.commit()
