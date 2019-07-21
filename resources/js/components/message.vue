<template>
	<div>
    	<span class="badge" :class="badgeColor">{{user}}</span>
    	<li class="list-group-item" :class="className" ><slot></slot>
        <small><span class="pull-right" style="float: right;">{{time}}</span></small>
        </li>
	</div>
</template>

<script>
    export default {
        
    	props : [
    		'color',
    		'user',
            'time'
    	],
    	computed : {
    		className(){
    			return 'list-group-item-'+this.color;
    		},
    		badgeColor(){
    			return 'badge-'+this.color;
    		} 
    	},
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
