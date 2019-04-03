<footer>
    <nav class = "footer col-md-8 navbar navbar-expand-lg">
        <ul class="d-flex">
            <li><a href="#">About us</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">Help</a></li>
        </ul>
        <div class="networks d-flex justify-content-center">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </nav>
</footer>
<script>
    let navbar = document.getElementById('nav');
    let size = (window.innerWidth/12);

    window.onscroll = function(){
    if (document.body.scrollTop > size || document.documentElement.scrollTop > size) {
    navbar.className = "plus";
    }
    else{
    navbar.className = "zero";
    }
    };
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
</body>
</html>