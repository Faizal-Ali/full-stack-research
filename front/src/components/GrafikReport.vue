<template>
  <LineChart :chartData="testData" />
</template>

<script>
import { defineComponent } from 'vue';
import { LineChart } from 'vue-chart-3';
import { Chart, registerables } from "chart.js";

Chart.register(...registerables);

export default defineComponent({
  name: 'Home',
  components: { LineChart },
  setup() {
    const testData = {
      labels: ['Paris', 'Nîmes', 'Toulon', 'Perpignan', 'Autre'],
      datasets: [
        {
          label: 'Link 2',
          data: [30, 30, 100, 70, 5],
          borderColor: '#77CEFF',
        },
        {
          label: 'Link 1',
          data: [30, 40, 60, 70, 5],
          borderColor: '#0079AF',
        },
      ],
    };

    return { testData };
  },
});
</script>