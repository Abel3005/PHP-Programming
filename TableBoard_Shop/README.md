# TableBoard_Shop
게시판-Shop 의 TODO 완성하기!

## 기존 파일
```
 .
├── css - board_form.php와 index.php 에서 사용하는 stylesheet
│   └── ...
├── fonts - 폰트
│   └── ...
├── images - 아이콘 이미지
│   └── ...
├── vender - 외부 라이브러리
│   └── ...
├── js - board_form.php와 index.php 에서 사용하는 javascript
│   └── ...
├── function
│   └── insert.php - 게시글 작성 기능 구현
│   └── update.php - 게시글 수정 기능 구현
│   └── delete.php - 게시글 삭제 기능 구현
├── board_form.php - 게시글 작성/수정 시 사용하는 form이 포함된 php 파일
├── index.php - 게시글 조회 기능 구현
```

## MySQL 테이블 생성!

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
Note: 
- table 이름은 tableboard_shop 으로 생성
- 기본키는 num 으로, 그 외의 속성은 board_form.php 의 input 태그 name 에 표시된 속성 이름으로 생성
- 각 속성의 type 은 자유롭게 설정 (단, 입력되는 값의 타입과 일치해야 함)
    - ex) price -> int
    - ex) name -> char or varchar
    
## index.php 수정
데이터 레코드를 가져오기 위하여 
$sql = "select num, date, order_id, name, price, quantity, (price * quantity) AS total from tableboard_shop order by num";
로 받아왔고 이에 따라서 출력을 동적으로 바꾸었다.
## board_form.php 수정
 $sql = "select * from tableboard_shop where num=$_GET[num]"; 을이용하여 GET으로 받아온 num 값에 대응하는 레코드를 가져온다.
 이 때 num값을 받지 않는 경우에는 insert가 받을 경우에는 update가 발생하고 거기에 필요한 변수들을 board.php에서 넘겨줄 수 있도록 수정하였다.
## function
### insert.php 수정
 $sql = "insert into tableboard_shop(order_id, name, price, quantity,date) values('$_POST[order_id]', '$_POST[name]', '$_POST[price]', '$_POST[quantity]', '$_POST[date]')";
 을 사용하여 레코드를 추가하고 그것을 수행하지 못한 경우에 에러메시지가 발생하도록 하였다.
### update.php 수정
$sql = "update tableboard_shop set order_id=$_POST[order_id], name='$_POST[name]', price=$_POST[price], quantity=$_POST[quantity], date=$_POST[date] where num=$_GET[num]";
을 사용하여 레코드를 업데이트하고 그것을 수행하지 못한 경우에 에러메시지가 발생하도록 하였다.
### delete.php 수정
$sql = "delete from tableboard_shop where num = '$_GET[num]'"
을 사용하여 GET으로 넘겨받은 num값에 해당하는 레코드를 삭제하고 그것을 수행하지 못한 경우에는 에러메시지가 발생하도록 하였다.

