INSERT INTO ft_table (login, `group`, creation_date) SELECT last_name, 'other', birthdate FROM user_card WHERE last_name LIKE '%a%' and length(last_name) < 9 order by last_name limit 10;
