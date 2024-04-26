CREATE Database quizdb;
USE quizdb;
CREATE TABLE questions(
    qid int(50) AUTO_INCREMENT NOT null PRIMARY KEY,
    question varchar(300),
    ans_id int(50));


CREATE TABLE answers(
    aid int(255) AUTO_INCREMENT NOT null PRIMARY KEY,
    question varchar(300),
    ans_id int(50));

/*keeping track of user's score*/
CREATE TABLE users(
    uid int(255) AUTO_INCREMENT NOT null PRIMARY KEY,
    username varchar(300),
    totalques int(50),
    correct_answers int(50));


insert into questions values(
    1, " Which of the following is used to read a HTML page and render it?", 1);
insert into questions values(
    2, "Which of the following is a popular front-end framework for building user interfaces in JavaScript?", 5);
insert into questions values(
    3, "Which of the following directives is used to start an angularJS application?", 9);
insert into questions values(
    4, "What is DOM?", 13);
insert into questions values(
    5, "Which is the storage that allows the caching of web pages and their associated resources?", 17);


/*for every question the correct answer is the first option i.e. aid: 1,5,9,13,17*/
/*options for question_1 i.e ans_id = 1*/
insert into answers values(1, "Web browser", 1);
insert into answers values(2, "Web matrix", 1);
insert into answers values(3, "Web server", 1);
insert into answers values(4, "None of the above", 1);

/*options for question_2 i.e ans_id = 2*/
insert into answers values(5, "Angular", 2);
insert into answers values(6, "Django", 2);
insert into answers values(7, "Flask", 2);
insert into answers values(8, "Node.js", 2);

/*options for question_3 i.e ans_id = 3*/
insert into answers values(9, "ng-app", 3);
insert into answers values(10, "ng-init", 3);
insert into answers values(11, "ng-repeat", 3);
insert into answers values(12, "ng-model", 3);

/*options for question_4 i.e ans_id = 4*/
insert into answers values(13, "Convention for representing and interacting with objects in html documents", 4);
insert into answers values(14, "Application programming interface", 4);
insert into answers values(15, "Hierarchy of objects in ASP.NET", 4);
insert into answers values(16, "None of the above", 4);

/*options for question_4 i.e ans_id = 5*/
insert into answers values(17, "Offline Web Applications", 5);
insert into answers values(18, "Cookies", 5);
insert into answers values(19, "Web Databases", 5);
insert into answers values(20, "File System API", 5);


CREATE Database sessionpractical;
USE sessionpractical;
/*user registering in the website*/
CREATE TABLE signin(
    id int(255) AUTO_INCREMENT NOT null PRIMARY KEY,
    name varchar(300) NOT null,
    password varchar(300) NOT null);


