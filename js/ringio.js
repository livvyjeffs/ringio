$(document).ready(function(){


// RULES

// [option-container]
// // [option][enabled="true" or enabled="false"]
// // // [option-controller][checked]

function toggle(option){


  var parentOption = option.parents('[option]');

    //if it's already selected, ignore

    if(parentOption.attr('enabled') === "true"){

      return;

    }else{

      var parentOptionContainer = option.parents('[option-container]');
      var selectedOption = parentOptionContainer.find('[option][enabled="true"]');

      //remove enabled status on currently selected option

      selectedOption.attr('enabled', false);
      selectedOption.find('[option-controller]').removeAttr('checked');

      //enable parameter option

      parentOption.attr('enabled',true);
      option.attr('checked', true);
      parentOption.find('button').removeClass('disabled');
      parentOption.find('input').not('[option-controller]').removeAttr('disabled');

      //disable all other options

      var disabledOptions = parentOptionContainer.find('[option]').not('[enabled="true"]');

      disabledOptions.attr('enabled', false);

      disabledOptions.find('button').addClass('disabled');
      disabledOptions.find('input').not('[option-controller]').attr('disabled',true);

    }

  };

  var optionControllers = $('[option-controller]');
  var preselectedOptions = $('[option-controller][checked]');

  console.log(optionControllers)

  //Set events for option-controllers

  optionControllers.click(function(){

    toggle($(this));

  });

  // Enable and Disable Pre-selected Options

  toggle(preselectedOptions);

});