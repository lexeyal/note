<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div id='app'>
            {{ info }}
        </div>
    </body>
    <script src="../js/vue.js"></script>
    <script src="../js/axios.min.js"></script>
    <script>
        new Vue({
            el: '#app',
            data() {
              return {
                info: null
              };
            },
            mounted() {
              axios
                .get('test_model_prep_main.php')
                .then(response => (this.info = response.data));
            }
        });
    </script>
</html>
