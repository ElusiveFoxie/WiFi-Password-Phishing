# WiFi-Password-Phishing
Simple PHP code for phishing WiFi passwords using evil twin attacks

Attack Scenario:

1. Prepare server by installing LAMP:
```
sudo apt update
sudo apt install apache2
sudo apt install mysql-server
sudo apt install php libapache2-mod-php php-mysql
```
2. Run services:
```
sudo systemctl start mysql.service
sudo systemctl start apache2
```
3. Prepare MySql (if using insert_sql.php)
```
sudo mysql -u root -p < cmds.txt
```
2. Create evil twin with the same SSID and stronger signal:
``` 
(TBD) evil twin create command here
```

2. Move files to http root directory (/var/www/html) and configure captive portal
```
sudo cp -r * /var/www/html
(TBD) config detectportal command here
```

3. Deauthenticate the victim using command:
``` 
(TBD) deauthenticate victim
```
4. Intercept password
5. Show result (insert_txt_file.php):
``` 
cat /var/www/html/passwords.txt
```
or (if using insert_sql.php):
``` sudo mysql -u fox -p < show_mysql_result.txt ```

