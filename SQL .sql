SELECT CURDATE(); -- Returns the current date in 'YYYY-MM-DD' format


SELECT LAST_DAY('2024-08-08'); -- Returns '2024-08-31'

SELECT SYSDATE(); -- Returns the current date and time


SELECT DAY('2024-08-08'); -- Returns 8


SELECT DAYNAME('2024-08-08'); -- Returns 'Thursday'




SELECT DAYOFMONTH('2024-08-08'); -- Returns 8


SELECT DAYOFWEEK('2024-08-08'); -- Returns 5 (Thursday)



SELECT DAYOFYEAR('2024-08-08'); -- Returns 221




SELECT WEEK('2024-08-08'); -- Returns 32



SELECT WEEKDAY('2024-08-08'); -- Returns 3 (Thursday)



SELECT WEEKOFYEAR('2024-08-08'); -- Returns 32



SELECT YEAR('2024-08-08'); -- Returns 2024



SELECT YEARWEEK('2024-08-08'); -- Returns 202432



SELECT EXTRACT(YEAR FROM '2024-08-08'); -- Returns 2024


SELECT DATE_ADD('2024-08-08', INTERVAL 10 DAY); -- Returns '2024-08-18'


SELECT ADDDATE('2024-08-08', INTERVAL 10 DAY); -- Returns '2024-08-18'



SELECT MAKEDATE(2024, 221); -- Returns '2024-08-08'




SELECT DATE_SUB('2024-08-08', INTERVAL 10 DAY); -- Returns '2024-07-29'


SELECT DATEDIFF('2024-08-08', '2024-08-01'); -- Returns 7



SELECT TO_DAYS('2024-08-08'); -- Returns 738255


SELECT FROM_DAYS(738255); -- Returns '2024-08-08'


SELECT PERIOD_DIFF(202408, 202401); -- Returns 7


SELECT DATE_FORMAT('2024-08-08', '%Y-%m-%d'); -- Returns '2024-08-08'
SELECT DATE_FORMAT('2024-08-08', '%M %d, %Y'); -- Returns 'August 08, 2024'



SELECT STR_TO_DATE('08/08/2024', '%m/%d/%Y'); -- Returns '2024-08-08'


SELECT CURTIME(); -- Returns the current time in 'HH:MM:SS' format



SELECT CURRENT_TIMESTAMP; -- Returns the current date and time




SELECT LOCALTIME; -- Returns the current date and time


SELECT LOCALTIMESTAMP; -- Returns the current date and time



SELECT TIMESTAMP('2024-08-08 14:35:29'); -- Returns '2024-08-08 14:35:29'
SELECT TIMESTAMP(); -- Returns the current date and time


SELECT TIME('2024-08-08 14:35:29'); -- Returns '14:35:29'


TIMEDIFF(time1, time2)
SELECT TIMEDIFF('2024-08-08 15:00:00', '2024-08-08 14:35:29'); -- Returns '00:24:31'

SELECT HOUR('14:35:29'); -- Returns 14



SELECT MINUTE('14:35:29'); -- Returns 35


SELECT SECOND('14:35:29'); -- Returns 29


SELECT MICROSECOND('14:35:29.123456'); -- Returns 123456


SELECT ADDTIME('14:35:29', '01:30:00'); -- Returns '16:05:29'


SELECT SUBTIME('14:35:29', '01:30:00'); -- Returns '13:05:29'


SELECT MAKETIME(14, 35, 29); -- Returns '14:35:29'



SELECT TIME_FORMAT('14:35:29', '%H:%i:%s'); -- Returns '14:35:29'


SEC_TO_TIME(seconds)
SELECT SEC_TO_TIME(5400); -- Returns '01:30:00'

SELECT TIME_TO_SEC('01:30:00'); -- Returns 5400