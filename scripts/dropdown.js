window.onload = function () {

    var dropdown = new Vue({
        el: '#dropdown',
        data: {
            prvi: false,
            drugi: false,
            treci: false,
            data1: ' ',
            data2: ' ',
            data3: ' '
        },

        methods: {
            prvidrop: function () {
                if (this.prvi == false) {
                    this.prvi = true;
                    this.drugi = false;
                    this.treci = false;
                    this.data1 = '<div><ol style="visibility: visible;"><li>Open your Minecraft client.</li><li>Select “Multiplayer”.</li><li>Click on “Add Server”.</li><li>Under “Server Address” enter the following: <b>coolcraft.me</b></li><li>Click on “Done” and double click on the server in the list.</li></ol><br><img src="images/faq1.png" alt="connect" class="faqpics" style="visibility: visible;"><br></div>';
                    this.data2 = ' ';
                    this.data3 = ' ';
                }
                else {
                    this.data1 = ' ';
                    this.data2 = ' ';
                    this.data3 = ' ';
                    this.prvi = false;
                    this.drugi = false;
                    this.treci = false;
                }
            },
            drugidrop: function () {
                if (this.drugi == false) {
                    this.drugi = true;
                    this.prvi = false;
                    this.treci = false;
                    this.data1 = ' ';
                    this.data2 = '<div><ol style="visibility: visible;"><li>If on Hub, right click while holding a compass named “Server Selector” in you hand.</li><li>Click on the icon which represents the server you want to play. You can hover over them to see more information.</li></ol><br><ol style="visibility: visible;"><li>If on other servers, type the command /servers in chat.</li><li>Click on the icon which represents the server you want to play. You can hover over them to see more information.</li></ol><img src="images/faq2.png" alt="specificgame" class="faqpics" style="visibility: visible;"><br></div>';
                    this.data3 = ' ';
                }
                else {
                    this.data1 = ' ';
                    this.data2 = ' ';
                    this.data3 = ' ';
                    this.prvi = false;
                    this.drugi = false;
                    this.treci = false;
                }
            },
            trecidrop: function () {
                if (this.treci == false) {
                    this.treci = true;
                    this.drugi = false;
                    this.prvi = false;

                    this.data1 = ' ';
                    this.data2 = ' ';
                    this.data3 = '<div>This depends on your playstyle. We recommend that you try every game mode and figure out which one fits you the best. Read the description of every game mode and it might help you decide.<br><img src="images/faq3.png" alt="rightgame" class="faqpics"><br> </div>';
                }
                else {
                    this.data1 = ' ';
                    this.data2 = ' ';
                    this.data3 = ' ';
                    this.prvi = false;
                    this.drugi = false;
                    this.treci = false;
                }
            }
        },
        computed: {
        }
    });
}