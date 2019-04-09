create table tableboard_shop(
  num int auto_increment,
  order_id int not null,
  name char(10) not null,
  price int not null,
  quantity int not null,
  date date not null,
  primary key(num)
);
insert into tableboard_shop(order_id, name, price, quantity, date) values( '1', 'car', '10.0', '1', '2019-03-15');