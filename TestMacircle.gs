function myFunction() {
  // フォーム作成時にその月の値を入力すること
  //var month = Browser.inputBox('何月の課題曲用入力フォームを作成しますか?');
  var month = 2;
  var date = new Date();
  var sheetName = date.getFullYear() + '/' + (date.getMonth() + 1) + '/' + date.getDate();
  
  var spreadsheet = SpreadsheetApp.openById('1LSPePLpbtrFjNqVT1S-167feaKNzoFeTufA1MBYFe2o');
  var values = spreadsheet.getSheetByName('月課題曲一覧').getDataRange().getValues();
  var lastRow = spreadsheet.getSheetByName('月課題曲一覧').getLastRow();
  var formTitle = values[3][month -1];
  var formDescription = values[1][0]; //概要
  var formMusicList = [];
  var form = FormApp.create(formTitle);
  var j = 0;
  
  for(var i = 4;i <=lastRow-1;i++){
    formMusicList[j] = values[i][month -1];
    j++;
  }
  Logger.log(formMusicList[1]);
  
  form.setDescription(formDescription);
  form.addTextItem().setTitle('氏名').setRequired(true);
  
  for(var i = 1; i < formMusicList.length;i++){
    form.addCheckboxItem()
      .setTitle(formMusicList[i])
      .setChoiceValues(['ボーカル','リードギター','リズムギター','ベース','ドラム','キーボード'])
      .showOtherOption(false) //その他
      .setRequired(false); //必須か
  }
  form.setDestination(FormApp.DestinationType.SPREADSHEET, spreadsheet.getId());
    
  var sheets = spreadsheet.getSheets();
  for (var i = 0; i < sheets.length; i++) {
    // シート名に「フォームの回答」が含まれている場合
    var name = sheets[i].getName();
    if (name.indexOf('フォームの回答') != -1 && name.indexOf(sheetName) == -1) {
        sheets[i].setName(sheetName);
    }
  }
  
//  initSheet(formMusicList);
}
