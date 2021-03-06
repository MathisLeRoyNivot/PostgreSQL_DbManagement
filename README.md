<h1 align="center">PostgreSQL - Web Application</h1>

This project aims to a web platform that allow database management

## Initialization 

### 1. Download or clone the project
Download the zip of the project or clone the repository by taping the following command in your CLI :
```bash
git clone https://github.com/MathisLeRoyNivot/PostgreSQL_TP
```
### 2. Import DB 
After cloning or downloding the project, you will find in the Database folder (file named : Base.backup), the dump of the database. You will need to restore the database in pgAdmin (III or 4) by using the graphical interface (available on pgadmin ) or by taping the following command :

```bash
psql -U <username> -d <dbname> -1 -f <filename>.sql
```
or
```bash
pg_restore -U <username> -d <dbname> -1 <filename>.dump
```

## Test phase

### 1. Web development platform
For testing the project you will need a Web development platform. If still don't have one, here's the following web development platform depending on your operating system : 

| Windows | Linux | MacOS |
|---|---|---|
[Wamp Server](http://www.wampserver.com)  | [LAMP](https://doc.ubuntu-fr.org/lamp) | [MAMP](https://www.mamp.info/en/) |
[XAMPP](https://www.apachefriends.org/fr/download.html)|

And place the project into the 'www/' folder if your are in wamp for example.

## Contributor :computer:

- [Mathis Le Roy-Nivot](https://github.com/MathisLeRoyNivot "Go to @MathisLeRoyNivot's Github")

## License :white_check_mark:
[![MIT license](https://img.shields.io/badge/License-MIT-blue.svg)](https://github.com/MathisLeRoyNivot/PostgreSQL_DbManagement/blob/master/LICENSE) Mathis LE ROY-NIVOT 2019 ©
