<template>
  <!-- <LineChart :chartData="dataGrafik" /> -->
  <!-- <LineChart :chartData="testData" /> -->
  {{dataGrafik}}
</template>

<script>
import { defineComponent } from 'vue';
import { LineChart } from 'vue-chart-3';
import { Chart, registerables } from "chart.js";
import axios from 'axios'

Chart.register(...registerables);
export default defineComponent({
  name: 'Home',
  components: { LineChart },
  setup() {
    // var dataGrafik = {}
    axios.defaults.baseURL = 'http://localhost/research/back/creport/'
    var getdata = axios.get('get_report')
             .then(function (response) {
              // dataGrafik['labels'] = response.data['labels']
              // dataGrafik['datasets'] = response.data['arr_data']
              return response.data
             })
             .catch(error => alert(error));
    var dataGrafik = {};
    getdata.then(function (data) {
      dataGrafik = data
    })
    return {dataGrafik}
    // console.log(dataGrafik)
    // return {dataGrafik}
    // const testData = {
    //     labels: ['Paris', 'Nîmes', 'Toulon', 'Perpignan', 'Autre'],
    //     datasets: [
    //       {
    //         label: 'Link 2',
    //         data: [30, 30, 100, 70, 5],
    //         borderColor: '#77CEFF',
    //       },
    //       {
    //         label: 'Link 1',
    //         data: [30, 40, 60, 70, 5],
    //         borderColor: '#0079AF',
    //       },
    //     ],
    //   };
    //   // console.log(testData)
    // return {testData}
  },
});
</script>