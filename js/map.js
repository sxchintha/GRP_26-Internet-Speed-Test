
  function showdrop() {
    
    var checkList = document.getElementById('list1');
    checkList.getElementsByClassName('anchor')[0];
    if (checkList.classList.contains('visible'))
      checkList.classList.remove('visible');
    else
      checkList.classList.add('visible');
  }
  
  function selectAllISP(source) {
    checkboxes = document.getElementsByName('ISP[]');
    for(var i=0, n=checkboxes.length;i<n;i++) {
     checkboxes[i].checked = source.checked;
    }
  }

  