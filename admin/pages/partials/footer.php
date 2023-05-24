<script>
        var p = document.querySelector('input[type="password"]');
        var b = document.querySelector('#showPassword');
        
        const showPassword = () => {
            var isChecked =  b.checked;
            if(isChecked){
                p.setAttribute('type','text')
            }else{
                p.setAttribute('type','password')

            }
        }
        b.addEventListener('change', showPassword, false)
    </script>
    <script src="pages/assets/js/all.js"></script>
</body>
</html>