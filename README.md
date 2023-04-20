# 🖥️ 프로젝트 소개
PHP를 활용한 웹사이트 만들기(의류쇼핑몰)
<br>

## 🕰️ 개발 기간
* 22.12.20 - 23.01.03

## 🧑‍🤝‍🧑 맴버구성
 - 남민섭: 회원가입, 로그인, 로그아웃, 아이디 찾기, 비밀번호 찾기, 비밀번호 변경, 장바구니, 상품추가, 상품 리스트 페이지, 상품 상세보기, 리뷰(쓰기,수정, 삭제, 페이징), 서버,웹 배포
 - 전진솔: 메인화면, 상품 리스트 페이지
 - 김재원: 이미지 자료 수집, 로그인 페이지, 상품 상세보기 페이지 

## ⚙️ 사용한 스킬
Html, Css, JavaScript, PHP, MySQL

#### 관리자
-Id: admin

-password: admin

## 📌 주요 기능
### 로그인 <a href="https://github.com/namminimi/shopping/wiki/%EA%B8%B0%EB%8A%A5-%EC%86%8C%EA%B0%9C2(%EB%A1%9C%EA%B7%B8%EC%9D%B8)" >상세보기 - WIKI 이동</a>
- ID찾기, PW찾기
- session함수를 사용하여 로그인 한 id값 세션스토리지에 저장

### 회원가입 <a href="https://github.com/namminimi/shopping/wiki/%EA%B8%B0%EB%8A%A5-%EC%86%8C%EA%B0%9C1(%ED%9A%8C%EC%9B%90%EA%B0%80%EC%9E%85)" >상세보기 - WIKI 이동</a>
- ID 중복 체크
- password_hash 사용하여 비밀번호 암호화
- 정규표현식 사용하여 사용자가 알맞는 값을 입력하게 메세지(알림) 출력

### 로그아웃

### 상품 등록 <a href="https://github.com/namminimi/shopping/wiki/%EA%B8%B0%EB%8A%A5-%EC%86%8C%EA%B0%9C3(%EC%83%81%ED%92%88)#%EF%B8%8F-%EC%83%81%ED%92%88%EC%B6%94%EA%B0%80" >상세보기 - WIKI 이동</a>
- 관리자id로만 접근 가능
- 이미지 업로드

### 상품리스트 페이지 <a href="https://github.com/namminimi/shopping/wiki/%EA%B8%B0%EB%8A%A5-%EC%86%8C%EA%B0%9C3(%EC%83%81%ED%92%88)#%EF%B8%8F-%EC%83%81%ED%92%88%EB%A6%AC%EC%8A%A4%ED%8A%B8-%ED%8E%98%EC%9D%B4%EC%A7%80" >상세보기 - WIKI 이동</a>
- 각 의류상품 종류 클릭시 관련 종류 의류 리스트 출력

### 상품 상세보기 페이지 <a href="https://github.com/namminimi/shopping/wiki/%EA%B8%B0%EB%8A%A5-%EC%86%8C%EA%B0%9C3(%EC%83%81%ED%92%88)#%EF%B8%8F-%EC%83%81%ED%92%88-%EC%83%81%EC%84%B8%EB%B3%B4%EA%B8%B0" >상세보기 - WIKI 이동</a>
- 상품에 대한 상세 내용
- 장바구니 담기
- 해당 의류 상품 종류의 리뷰들 출력

### 장바구니 페이지 <a href="https://github.com/namminimi/shopping/wiki/%EA%B8%B0%EB%8A%A5-%EC%86%8C%EA%B0%9C4(%EC%9E%A5%EB%B0%94%EA%B5%AC%EB%8B%88)" >상세보기 - WIKI 이동</a>
- 상품 개별 선택 체크박스 클릭시 총 상품 금액 표시
- 개별 선택 삭제

### 리뷰 페이지 <a href="https://github.com/namminimi/shopping/wiki/%EA%B8%B0%EB%8A%A5-%EC%86%8C%EA%B0%9C5(%EB%A6%AC%EB%B7%B0)" >상세보기 - WIKI 이동</a>
- 글 추가, 수정, 삭제 
- 페이징 기능
- 상세보기

#### 메인페이지
- 스크롤 이벤트를 사용하여 클릭만으로 위 아래로 위치 이동 가능
