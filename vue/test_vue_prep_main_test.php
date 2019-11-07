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
            <p>{{ info }}</p>
            <p>{{ textSend }}</p>
            <p>{{ vd1 }}</p>



            <div>
                <!-- v-on:change="getData('text seys')" -->

                <!-- v-on:click="getData('vd2 text seys')" -->
<!-- 
//--------------! привяжем переменную к атрибуту value
                v-model='vd1'
//--------------! событие    ! метод  ! параметр
                v-on:change="getData('d1')"
 -->
            <input type="text" name="d1"
                v-model='vd1'
                v-on:change="getData('d1')"
            ><label>d1</label>
            </div>
            <div>
            <input type="text" name="d2"
                v-model='vd2'
                v-on:change="getData('d2')"
            ><label>d2</label>
            </div>
            <div>
            <input type="text" name="d3"
                v-model='vd3'
                v-on:change="getData('d3')"
            ><label>d3</label>
            </div>
            <div>
            <input type="text" name="d4"
                v-model='vd4'
                v-on:change="getData('d4')"
            ><label>d4</label>
            </div>
            


        </div>
    </body>
    <script src="js/vue.js"></script>
    <script src="js/axios.min.js"></script>
    <script>
        app = new Vue({
            el: '#app',
            data: {
                // Начальные значения переменных
                vd1: 'd1 is',
                vd2: 'd2 is',
                vd3: 'd3 is',
                vd4: 'd4 is',

                // textSend: '',

                info: null
            },
            computed: {
                textSend: function(){
                     return 'test_model_prep_main.php?d1=' + this.vd1 + '&d2=' + this.vd2
                      + '&d3=' + this.vd3 + '&d4=' + this.vd4;
                }
            },
            methods: {
                /**
                Срабатывает при изменении значений полей
                !!! но не в первый раз !!!
                */
                getData: function (message) {
                  // alert(message)
                  // document.
                  console.log(message);

                  axios
                    .get(this.textSend)
                    .then(response => (this.info = response.data));
                }
            },
            mounted() {
                // Сработал 1 раз - при первом изменении vd1 
                // т.е. при первой загрузке!!!
                // this.textSend = 'test_model_prep_main.php?d1=' + this.vd1;

              axios
                // .get('test_model_prep_main.php')
                .get(this.textSend)
                .then(response => (this.info = response.data));
            }
        });
    </script>
</html>
