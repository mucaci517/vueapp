<template>
  <main>
    <header><h1>Header</h1></header>
    <div>
      <el-row>
        <el-col :span="6" class="side-menu" :style="{ top: getSideMenuTop }">
           <el-menu mode="vertical" default-active="0">
             <el-menu-item-group v-for="(group, index1) in groups"
                 :key="group.title" :title="group.title">
               <el-menu-item v-for="(item, index2) in group.items"
                   :key="item.label" :index="getItemIndex(groups, index1, index2)"
                   v-scroll-to="item.to">
                 {{ item.label }}
               </el-menu-item>
             </el-menu-item-group>
           </el-menu>
        </el-col>
        <el-col :span="18" class="contents">
          <div id="contents-1">
            <p>CONTENTS 1</p>
          </div>
          <div style="height: 400px;"></div>
          <div id="contents-2">
            <p>CONTENTS 2</p>
          </div>
          <div style="height: 400px;"></div>
          <div id="contents-3">
            <p>CONTENTS 3</p>
          </div>
          <div style="height: 400px;"></div>
          <div id="contents-4">
            <p>CONTENTS 4</p>
          </div>
          <div style="height: 400px;"></div>
          <div style="height: 400px;"></div>
        </el-col>
      </el-row>
    </div>
  </main>
</template>

<script>
const Vue = require('vue')
/*
  Vue ScrollTo
 */
import VueScrollTo from 'vue-scrollto'
Vue.use(VueScrollTo)

export default {
  data() {
    return {
      headerHeight: 0,
      groups: [
        {
          title: 'GROUP 1',
          items: [
            { label: 'contents-1', to: '#contents-1' },
            { label: 'contents-2', to: '#contents-2' },
            { label: 'contents-3', to: '#contents-3' },
          ]
        },
        {
          title: 'GROUP 2',
          items: [
            { label: 'contents-4', to: '#contents-4'}
          ]
        }
      ]
    }
  },
  mounted() {
    this.headerHeight = $('#main-header').outerHeight()

    console.log(this)
    // VueScrollTo初期設定
    VueScrollTo.install(Vue, {
      container: 'body',
      duration: 500,
      easing: 'linear',
      offset: -this.headerHeight,
      cancelable: true,
      onDone: false,
      onCancel: false,
      x: false,
      y: true
    })
  },
  computed: {
    getSideMenuTop() {
      // ヘッダーの高さ
      return this.headerHeight + 'px'
    }
  },
  methods: {
    getItemIndex(groups, groupIdx, itemIdx) {
      let total = 0
      for (var i = groupIdx - 1; i >= 0; i--) {
        total += groups[i].items.length
      }
      total += itemIdx
      return String(total)
    },
  }
}
</script>

<style lang="scss" scoped>
@import "resources/assets/sass/variables";

</style>
