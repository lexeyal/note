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
            <!-- {{ info }} -->
            <p>Computed reversed message: "{{ reversedMessage }}"</p>
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
//             mounted() {
//               axios
// //                .get('https://api.coindesk.com/v1/bpi/currentprice.json')
//                 .get('test_model_prep_main.php')
//                 .then(response => (this.info = response.data));
//             }

           computed: {
           // a computed getter
               reversedMessage: function () {
            axios
               .get('test_model_prep_main.php')
               .then(response => (this.info = response.data));
           return this.info
               }
           }
          });
    </script>
</html>
