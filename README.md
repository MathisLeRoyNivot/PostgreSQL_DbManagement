# PostgreSQL - Web Application

> Project realized by [Mathis Le Roy Nivot](https://github.com/MathisLeRoyNivot)

This project aims to a web platform 

## Initialization 

### 1. Download or clone the project
Download the zip of the project or clone the repository by taping the following command in your CLI :
```bash
git clone https://github.com/MathisLeRoyNivot/PostgreSQL_TP
```
### 2. Import DB 
After cloning or downloding the project, you will find in the Database folder, the dump of the database. You will need to restore the database in pgAdmin (III or 4) by using the graphical interface (available on pgadmin ) or by taping the following command :

```bash
psql -U <username> -d <dbname> -1 -f <filename>.sql
```
or
```bash
pg_restore -U <username> -d <dbname> -1 <filename>.dump
```
