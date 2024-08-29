<template>
    <GMapMap
      :center="{ lat: latitude, lng: longitude }"
      :zoom="13"
      style="width: 100%; height: 500px"
    >
      <GMapMarker
        :position="{ lat: latitude, lng: longitude }"
      />
    </GMapMap>
  </template>
  
  <script>
  import { GMapMap, GMapMarker } from '@fawmi/vue-google-maps';
  
  export default {
    name: 'GoogleMap',
    components: {
      GMapMap,
      GMapMarker,
    },
    props: {
      latitude: {
        type: Number,
        required: true,
      },
      longitude: {
        type: Number,
        required: true,
      },
    },
  };
  </script>
  

  