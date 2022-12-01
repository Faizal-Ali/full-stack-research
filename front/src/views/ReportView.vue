<template>
    <Sidebar/>

    <div class="main-content" style="overflow-y:auto">
        <section class="section">
            <div class="section-header">
                <h1 class="w-100">
                    Report
                </h1>
            </div>

            <div class="section-body bg-white shadow-sm p-2">
                <GrafikReport/>
                <hr>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th class="bg-primary text-center text-white sticky-first-tr" rowspan="2">No</th>
                            <th class="bg-primary text-center text-white sticky-first-tr" rowspan="2">Nama</th>
                            <th class="bg-primary text-center text-white sticky-first-tr" rowspan="2">Link</th>
                            <th class="bg-primary text-center text-white sticky-first-tr" rowspan="2">Terjual</th>
                            <th class="bg-primary text-center text-white sticky-first-tr" rowspan="2">Harga</th>
                            <th class="bg-primary text-center text-white sticky-first-tr" rowspan="2">Omset</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam rerum, fugit, blanditiis optio ducimus facilis esse eos sint minus iure quia. Reprehenderit esse, quos cupiditate autem et fuga adipisci at.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur nostrum aspernatur omnis iure nisi ex molestias, reprehenderit exercitationem architecto facilis non animi maiores laboriosam dolor itaque voluptatum quo facere veritatis.</td>
                            <td>5</td>
                            <td>20000</td>
                            <td>1000000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam rerum, fugit, blanditiis optio ducimus facilis esse eos sint minus iure quia. Reprehenderit esse, quos cupiditate autem et fuga adipisci at.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur nostrum aspernatur omnis iure nisi ex molestias, reprehenderit exercitationem architecto facilis non animi maiores laboriosam dolor itaque voluptatum quo facere veritatis.</td>
                            <td>5</td>
                            <td>20000</td>
                            <td>1000000</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam rerum, fugit, blanditiis optio ducimus facilis esse eos sint minus iure quia. Reprehenderit esse, quos cupiditate autem et fuga adipisci at.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur nostrum aspernatur omnis iure nisi ex molestias, reprehenderit exercitationem architecto facilis non animi maiores laboriosam dolor itaque voluptatum quo facere veritatis.</td>
                            <td>5</td>
                            <td>20000</td>
                            <td>1000000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</template>

<script>
import Sidebar from '@/components/Sidebar.vue'
import GrafikReport from '@/components/GrafikReport.vue'
export default {
  name: 'HomeView',
  components: {
    Sidebar,
    GrafikReport
  }
}
</script>
