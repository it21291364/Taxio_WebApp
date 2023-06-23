-CREATE TABLE users(
      user_id int(11)AUTO_INCREMENT PRIMARY KEY not null,
      user_first varchar(256)not null,
      user_last varchar(256)not null,
      user_email varchar(256)not null,
      user_pwd varchar(256)not null
	  user_phone int(10)not null,
	  vehicle_type varchar(256)not null,
	  vehicle_details varchar(256)not null,
 );
 INSERT INTO users(user_first,user_last,user_email,user_pwd,user_phone,vehicle_type,vehicle_details)
      VALUES('Daniel','Nielsen','usemmtuts@gmail.com','Admin','0771409080','Car','Toyota Vitz');
	  
	  
	   INSERT INTO users(user_first,user_last,user_email,user_pwd,user_phone,vehicle_type,vehicle_details)
      VALUES('John','Wick','john@gmail.com','Admin12','0775609080','Van','Nissan Altima');