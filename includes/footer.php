<footer>
    <p>Course Group Assistant (CGA) | COMP 5531 | Winter 2022 | <b>Developed by Shafiq Imtiaz</b></p>
</footer>

</body>

<script>
    window.addEventListener("resize", resizeListener);

    function resizeListener() {
        let link = document.getElementById("header-link");
        if (window.innerWidth > 1024) {
            link.style.display = "flex";
        } else {
            link.style.display = "none";
        }
    }

    function toggleHamburger(x) {
        x.classList.toggle("change");
        let link = document.getElementById("header-link");
        if (link.style.display === "block") {
            link.style.display = "none";
        } else {
            link.style.display = "block";
            link.style.textAlign = "center";
        }
    }

    setTimeout(() => {
        const box = document.getElementById('notification');
        box.style.display = 'none';
    }, 5000);
</script>

</html>