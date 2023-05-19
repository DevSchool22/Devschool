
        $(document).ready(function() {
            var currentQuestion = 0;
            var questions = $(".question-container");
          
            questions.hide();
            questions.eq(currentQuestion).show();
          
            $(".next-question").click(function() {
              currentQuestion++;
          
              if (currentQuestion >= questions.length) {
                alert("Fim do quiz!");
              } else {
                questions.hide();
                questions.eq(currentQuestion).show();
              }
            });
          });