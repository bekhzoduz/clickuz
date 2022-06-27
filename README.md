# CLICKUZ SHOP API | @BEKHZODJON
![ClickLLC]([https://click.uz/click/images/logo.svg](https://merchant.click.uz/assets/images/logo.png))
__https://t.me/Bekhzodjon___

### Kodni o`rnatish bo`yicha qo`llanma
1) MYSQL tablitsa yaratib olamiz
2) Namunadagi kodni kodingizga qo'shing
```mysql 
CREATE TABLE clickuz (id BIGINT(100) NOT NULL AUTO_INCREMENT ,
trans_id VARCHAR(200) NULL DEFAULT NULL , 
merchant_id VARCHAR(200) NULL DEFAULT NULL , 
amount DECIMAL(10,2) NOT NULL DEFAULT '0.00' , 
sign_time TIMESTAMP NOT NULL , 
situation VARCHAR(11) NULL DEFAULT NULL , 
status VARCHAR(11) NULL DEFAULT NULL , 
PRIMARY KEY (id)) ENGINE = InnoDB;

3) `complete.php` va `prepare.php` kodlarini o`zingizga moslab chiqasiz.
4) Browserdan https://merchant.click.uz/home/service ga kirib Prepare URL (Адрес проверки) ushbu bo'limga prepare.php url manzilini kiritasiz, Complete URL (Адрес результата) urlga kirib complete.php url manzilini kiritasiz

### AGAR KOD ISHLAMASA DEMAK XATO QILGANSIZ

####Mualliflik huquqi mavjud!
