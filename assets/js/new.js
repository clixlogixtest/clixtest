

  function openTab(evt, tabsName) {
                var i, tabs, tabButton;
                tabs = document.getElementsByClassName("tabs");
                for (i = 0; i < tabs.length; i++) {
                    tabs[i].style.display = "none";
                }
                tabButton = document.getElementsByClassName("tabButton");
                for (i = 0; i < tabButton.length; i++) {
                    tabButton[i].className = tabButton[i].className.replace(" btn btn-default", "");
                }
                document.getElementById(tabsName).style.display = "block";
                evt.currentTarget.className += " btn btn-default";
            }



$('.selectionButton .messageButtonClick').on('click', function (event) {
    $(this).siblings().removeClass('active');
    $(this).addClass('active');
  });

$('#OpenImgUpload').click(function(){ $('#imgupload').trigger('click'); });

$('#OpenImgUpload1').click(function(){ $('#imgupload1').trigger('click'); });