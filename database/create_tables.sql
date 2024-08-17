CREATE TABLE publisher(
    publisher_id INT AUTO_INCREMENT PRIMARY KEY,
    publisher_name VARCHAR(50),
    street VARCHAR(20),
    city VARCHAR(20),
    state VARCHAR(20),
    pin_code CHAR(6),
    contact CHAR(10),
    email VARCHAR(50),
    website VARCHAR(50),
    gstin CHAR(15)
);

CREATE TABLE author(
    author_id INT AUTO_INCREMENT PRIMARY KEY,
    author_name VARCHAR(50)
);

CREATE TABLE supplier(
    supplier_id INT AUTO_INCREMENT PRIMARY KEY,
    supplier_name VARCHAR(50),
    contact CHAR(10),
    email VARCHAR(50),
    type VARCHAR(10),
    street VARCHAR(20),
    city VARCHAR(20),
    state VARCHAR(20),
    pin_code CHAR(6)
);

CREATE TABLE book(
    book_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50),
    publisher_id INT,
    author_id INT,
    isbn_10 CHAR(11),
    isbn_13 CHAR(14),
    pages INT,
    price FLOAT,
    entry_date DATE,
    rack_no CHAR(3),
    supplier_id INT,
    FOREIGN KEY (publisher_id) REFERENCES publisher(publisher_id),
    FOREIGN KEY (author_id) REFERENCES author(author_id),
    FOREIGN KEY (supplier_id) REFERENCES supplier(supplier_id)
);

CREATE TABLE member(
    member_id INT AUTO_INCREMENT PRIMARY KEY,
    member_name VARCHAR(50),
    street VARCHAR(20),
    city VARCHAR(20),
    state VARCHAR(20),
    pin_code CHAR(6),
    contact CHAR(10),
    email VARCHAR(50)
);

CREATE TABLE book_issue(
    transaction_id INT AUTO_INCREMENT PRIMARY KEY,
    book_id INT,
    member_id INT,
    issue_date DATE,
    expected_return_date DATE,
    FOREIGN KEY (book_id) REFERENCES book(book_id),
    FOREIGN KEY (member_id) REFERENCES member(member_id)
);