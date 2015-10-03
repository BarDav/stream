Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

var stream = new Vue({
    el : '#stream',

    ready : function () {
        this.getActiveStream();
    },

    data : {
        streamUrl : '',
        isStreaming : false,
        streaming : false
    },

    methods : {
        getActiveStream: function () {
            this.$http.get('/stream/current',function(response) {
                if(response.success)
                {
                    this.isStreaming = response.isStreaming;
                    this.streaming = response.isStreaming;
                }
            });
        },

        toggleStream : function () {
            this.streaming = !this.streaming;
            var url = '/stream/enable';
            this.$http.post(url,{streaming : this.streaming},function(response) {
                console.debug(response);
                this.isStreaming = response.isStreaming;
            });
        },

        enableStreaming : function () {
            this.isStreaming = true;
        },

        disableStreaming : function() {
            this.isStreaming = false;
        }
    }

});
var pusher = new Pusher('2bae4eb58f5861408dd0', {
    encrypted: true
});

var channel = pusher.subscribe('test_channel');
channel.bind('App\\Events\\StreamEvent', function(data) {
     if(data.isStreaming)
     {
         stream.enableStreaming();
     }
     else
     {
         stream.disableStreaming();
     }
});