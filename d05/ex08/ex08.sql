mysql> select last_name, first_name, SUBSTRING(birthdate, 1, 10) as birthdate FROM user_card WHERE year(date(birthdate))=1989 ORDER BY last_name;
