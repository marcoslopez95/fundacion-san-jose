<template>
  <div id="dynamic-component-demo" class="demo">
  <button
    v-for="tab in tabs"
    v-bind:key="tab"
    v-bind:class="['tab-button', { active: currentTab === tab }]"
    v-on:click="currentTab = tab"
  >{{ tab }}</button>

  <component
    v-bind:is="currentTabComponent"
    class="tab"
  ></component>
</div>
</template>

<script>
import ExampleComponent from './ExampleComponent'
import boton from './boton'
import ModalAddRepr from './Modal-add-repr'
export default {
    components : {
        ExampleComponent,
        boton,
        ModalAddRepr,
    },
  data: {
    currentTab: 'ExampleComponent',
    tabs: ['ExampleComponent', 'boton', 'ModalAddRepr']
  },
  computed: {
    currentTabComponent: function () {
      return this.currentTab.toLowerCase()
    }
  }
}
</script>

<style>

</style>