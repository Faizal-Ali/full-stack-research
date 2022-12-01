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
            </div>
        </section>
    </div>
</template>

<script>
import Sidebar from '@/components/Sidebar.vue'
// import GrafikReport from '@/components/GrafikReport.vue'

export default {
  name: 'HomeView',
  components: {
    Sidebar,
    // GrafikReport
  }
}
</script>
