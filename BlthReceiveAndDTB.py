import time
import pymysql
import bluetooth

db = pymysql.connect("localhost","root","orava1337","TESTI_DATABASE")
cursor = db.cursor()

server_sock=bluetooth.BluetoothSocket( bluetooth.RFCOMM)
port = 1
server_sock.bind(("",port))
server_sock.listen(1)

client_sock,address = server_sock.accept()
print "Accepted connection from ",address
while True:
  time.sleep(1)
  data = client_sock.recv(1024)
  print "received [%s]" % data
  desibeli = data
  if (130 < desibeli < 20):
     print "virheellinen arvo"
  else:
    command = "INSERT INTO TESTI_DATA (Arvo) VALUES (%s)"  % (desibeli)
    print(command)
    cursor.execute(command)
    db.commit()
  if (data == "e"):
    print ("Exit")
    break
client_sock.close()
server_sock.close()
  
