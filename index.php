*{
    margin: 0  ;
    padding: 0;
    font-family: sans-serif;
}
.main{
    width: 100%;
    height: 100vh;
    position: relative;
    overflow: hidden;
    background:linear-gradient( to right,#9c27b0,#4f9bda) ;
}
.nav{
    width: 80%;
    position: sticky;
    margin:20px auto ;
    z-index: 1;
    display: flex;
    align-items: center;
}
.logo
{
    flex-basis: 20px;

}
.logo img{
    width: 150px;
}
.nav-link{
    flex: 1;
    text-align: right;

}
.nav-link ul li
{
list-style: none;
display: inline-block;
margin: 0 20px;
}

.nav-link ul li a
{
    color: #f4f1f5;
    text-decoration: none;
}
.information
{
    width: 1000px;
    height: 1000px;
    position: absolute;
    left: 0%;
    top: 50%;
    transform: translateY(-50px);
}
#circle
{
    width: 1000px;
    height: 1000px;
    position: absolute;
    top: 0;
    left: 0;
    border-radius: 50%;
    background: rgb(141, 243, 146);

}
.features img{
    width: 70px;
}

.features
{
position: absolute;