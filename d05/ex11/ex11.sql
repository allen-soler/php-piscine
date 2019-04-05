SELECT UPPER(last_name) as `NAME`, first_name, price FROM user_card JOIN subscription WHERE price > 42 ORDER BY last_name, first_name;
