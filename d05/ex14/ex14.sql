SELECT floor_number, SUM(nb_seats) as 'seat' FROM cinema GROUP BY floor_number ORDER BY `seat` DESC;
