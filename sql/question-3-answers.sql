-- select by id 1:
SELECT * FROM posts WHERE id = `1`;

-- select all posts where title = includes "title 2":
SELECT * FROM posts WHERE title = 'title 2';
SELECT * FROM posts WHERE title LIKE '%title 2%';

-- select all posts and order by the title column alphabetically:
SELECT * FROM posts ORDER BY 'title column' ASC;

-- insert 3 new posts
INSERT INTO posts(titile, description) VALUES('post #3', 'content for post #3');
INSERT INTO posts(titile, description) VALUES('post #4', 'content for post #4');
INSERT INTO posts(titile, description) VALUES('post #5', 'content for post #5');

-- update posts where id = 1, set the title to "new title"
UPDATE posts SET title ='new title' WHERE id= '1';

-- delete post where id = 2
DELETE FROM posts WHERE id='2';