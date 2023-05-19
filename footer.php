<!-- START FOOTER -->
<footer>
    <div>
        <a href="#">
            <img src="images/box-logo.jpg" alt="Box Website" />
        </a>

        <p>It ain't about how hard you can hit. It's about how hard you can get hit and keep moving forward.</p>
        
        <div class="footer-some">
            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
        </div>

    </div>
</footer>

<div class="after-footer">
    <p>
        © <span class="year"></span> Designed And Developed By <a href="https://github.com/milosm00">MM</a>.
    </p>
</div>

<script>
    let date = new Date();
    document.querySelector(".year").textContent = date.getFullYear();
</script>

<style>
footer{
    padding-top: 50px;
    padding-bottom: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color:#2b2b2b;
}

footer > div{
    padding-left: 10px;
    padding-right: 10px;
    display: flex;
    justify-content: center;
    align-items: left;
    flex-direction: column;
}

footer > div > a > img{
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

footer > div > p{
    padding-top: 10px;
    max-width: 300px;
    font-size: 18px;
    color: #fff;
}

.footer-some{
    padding-top: 10px;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    gap: 10px;
}

.footer-some > a{
    width: 40px;
    height: 40px;
    border-radius: 5px;
    background-color: #fff;
    color: #000;
    font-size: 20px;
    text-decoration: none;
    transition: all 0.5s;

    display: flex;
    justify-content: center;
    align-items: center;
}

.footer-some > a:hover{
    color: #fff;
    background-color: #C60C30;
}

.after-footer{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding-top: 20px;
    padding-bottom: 20px;
    background-color: #111111;
}

.after-footer > p{
    color: #fff;
    font-size: 18px;
    font-weight: 600;
    text-align: center;
}

.after-footer > p > a{
    color: #fff;
    transition: all 0.5s;
}

.after-footer > p > a:hover{
    text-decoration: none;
    color:#C60C30;
}

.year{
    font-family: 'Bitter', serif;
}
</style>

<!-- END FOOTER -->