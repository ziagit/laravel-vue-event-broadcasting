
<template>
  <div>
      {{key}}
       </div>
</template>
<script>

export default {
    data:()=>({
        key: null
    }),
    created(){
        console.log(".env: ", process.env.MIX_STRIP_KEY)
        this.key =process.env.MIX_STRIP_KEY
    }
}
</script>