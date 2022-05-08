window.onload = function () {

  var slidebg = new Vue({
      el: '#section-introduction',
      data: {
          image: 'images/pic1.png',
          counter: 1
      },

      methods: {
          change: function () {
              this.counter++;
              if (this.counter == 11) this.counter = 1;
              if (this.counter == 2 || this.counter == 4) this.counter++;
              if (this.counter == 1) this.image = 'images/pic1.png';
              if (this.counter == 3) this.image = 'images/pic3.png';
              if (this.counter == 5) this.image = 'images/pic5.png';
              if (this.counter == 6) this.image = 'images/pic6.png';
              if (this.counter == 7) this.image = 'images/pic7.png';
              if (this.counter == 8) this.image = 'images/pic8.png';
              if (this.counter == 9) this.image = 'images/pic9.png';
              if (this.counter == 10) this.image = 'images/pic10.png';
          }
      },
      computed: {
      }
  });


  var servers = new Vue({
      el: '#section-gamemodes',
      data: {
          factionsinfo: 'Factions is a competitive PvP game mode that lets players team up by creating and joining different factions. Players within the same faction work together to gather resources, build bases, protect their land, recruit new members and raid other factions.',
          survivalinfo: 'Survival is one of the main game modes in Minecraft. It is a peaceful singleplayer/multiplayer game mode where players must collect resources, build bases, battle mobs, eat, and explore the world in an effort to thrive and survive.',
          skyblockinfo: 'SkyBlock is a peaceful singleplayer/multiplayer game mode where players spawn on a floating island and must survive and complete challenges with the resources available.',
          prisoninfo: 'Prison is a peaceful singleplayer/multiplayer game mode where players work hard in mines as prisoners to progress through ranks and obtain freedom. As the ranking gets higher, mining gets harder.',
          creativeinfo: 'Creative is a peaceful singleplayer/multiplayer game mode where players have access to all blocks and items in the game. Players can build what they want and show off their builds to others.',
          minigamesinfo: 'Minigames is a mix of many different smaller game modes. Every minigame has its own unique gameplay.',
          indexnumber: 1,
          ime1: 'Survival',
          ime2: 'Factions',
          ime3: 'SkyBlock',
          link1: 'servers/survival',
          link2: 'servers/factions',
          link3: 'servers/skyblock',
          desc1: 'Survival is one of the main game modes in Minecraft. It is a peaceful singleplayer/multiplayer game mode where players must collect resources, build bases, battle mobs, eat, and explore the world in an effort to thrive and survive.',
          desc2: 'Factions is a competitive PvP game mode that lets players team up by creating and joining different factions. Players within the same faction work together to gather resources, build bases, protect their land, recruit new members and raid other factions.',
          desc3: 'SkyBlock is a peaceful singleplayer/multiplayer game mode where players spawn on a floating island and must survive and complete challenges with the resources available.',
          image1: 'images/icons/survival_icon.png',
          image2: 'images/icons/factions_icon.png',
          image3: 'images/icons/skyblock_icon.png',
      },
      methods: {
          goleft: function () {
              this.indexnumber--;
              if (this.indexnumber == 0) this.indexnumber = 6;
              if (this.indexnumber == 1) this.jedan();
              if (this.indexnumber == 2) this.dva();
              if (this.indexnumber == 3) this.tri();
              if (this.indexnumber == 4) this.cetiri();
              if (this.indexnumber == 5) this.pet();
              if (this.indexnumber == 6) this.sest();
          },
          goright: function () {
              this.indexnumber++;
              if (this.indexnumber == 7) this.indexnumber = 1;
              if (this.indexnumber == 1) this.jedan();
              if (this.indexnumber == 2) this.dva();
              if (this.indexnumber == 3) this.tri();
              if (this.indexnumber == 4) this.cetiri();
              if (this.indexnumber == 5) this.pet();
              if (this.indexnumber == 6) this.sest();
          },


          jedan: function () {
              this.ime1 = 'Survival';
              this.ime2 = 'Factions';
              this.ime3 = 'SkyBlock';
              this.link1 = 'servers/survival';
              this.link2 = 'servers/factions';
              this.link3 = 'servers/skyblock';
              this.desc1 = this.survivalinfo;
              this.desc2 = this.factionsinfo;
              this.desc3 = this.skyblockinfo;
              this.image1 = 'images/icons/survival_icon.png';
              this.image2 = 'images/icons/factions_icon.png';
              this.image3 = 'images/icons/skyblock_icon.png';
          },

          dva: function () {
              this.ime1 = 'Factions';
              this.ime2 = 'SkyBlock';
              this.ime3 = 'Prison';
              this.link1 = 'servers/factions';
              this.link2 = 'servers/skyblock';
              this.link3 = 'servers/prison';
              this.desc1 = this.factionsinfo;
              this.desc2 = this.skyblockinfo;
              this.desc3 = this.prisoninfo;
              this.image1 = 'images/icons/factions_icon.png';
              this.image2 = 'images/icons/skyblock_icon.png';
              this.image3 = 'images/icons/prison_icon.png';
          },
          tri: function () {
              this.ime1 = 'SkyBlock';
              this.ime2 = 'Prison';
              this.ime3 = 'Creative';
              this.link1 = 'servers/skyblock';
              this.link2 = 'servers/prison';
              this.link3 = 'servers/creative';
              this.desc1 = this.skyblockinfo;
              this.desc2 = this.prisoninfo;
              this.desc3 = this.creativeinfo;
              this.image1 = 'images/icons/skyblock_icon.png';
              this.image2 = 'images/icons/prison_icon.png';
              this.image3 = 'images/icons/creative_icon.png';
          },
          cetiri: function () {
              this.ime1 = 'Prison';
              this.ime2 = 'Creative';
              this.ime3 = 'Minigames';
              this.link1 = 'servers/prison';
              this.link2 = 'servers/creative';
              this.link3 = 'servers/minigames';
              this.desc1 = this.prisoninfo;
              this.desc2 = this.creativeinfo;
              this.desc3 = this.minigamesinfo;
              this.image1 = 'images/icons/prison_icon.png';
              this.image2 = 'images/icons/creative_icon.png';
              this.image3 = 'images/icons/minigames_icon.png';
          },
          pet: function () {
              this.ime1 = 'Creative';
              this.ime2 = 'Minigames';
              this.ime3 = 'Survival';
              this.link1 = 'servers/creative';
              this.link2 = 'servers/minigames';
              this.link3 = 'servers/survival';
              this.desc1 = this.creativeinfo;
              this.desc2 = this.minigamesinfo;
              this.desc3 = this.survivalinfo;
              this.image1 = 'images/icons/creative_icon.png';
              this.image2 = 'images/icons/minigames_icon.png';
              this.image3 = 'images/icons/survival_icon.png';
          },
          sest: function () {
              this.ime1 = 'Minigames';
              this.ime2 = 'Survival';
              this.ime3 = 'Factions';
              this.link1 = 'servers/minigames';
              this.link2 = 'servers/survival';
              this.link3 = 'servers/factions';
              this.desc1 = this.minigamesinfo;
              this.desc2 = this.survivalinfo;
              this.desc3 = this.factionsinfo;
              this.image1 = 'images/icons/minigames_icon.png';
              this.image2 = 'images/icons/survival_icon.png';
              this.image3 = 'images/icons/factions_icon.png';
          }
      },
      computed: {
      }
  });

}
