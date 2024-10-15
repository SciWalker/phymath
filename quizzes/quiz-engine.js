/// Tracks index of question on quiz
let currentQuestionIndex = 0

// Shortcut for removing duplicates from arrays
const uniq = (a) => {
    return Array.from(new Set(a));
}

// Accepts a parent id to remove all children
const removeAllChildren = (parent) => {
    let node = document.getElementById(parent)
    node.innerHTML = ``
}

// Add this function at the beginning of the file
function loadMathJax() {
    return new Promise((resolve, reject) => {
        if (typeof MathJax !== 'undefined') {
            // MathJax is already loaded
            resolve();
        } else {
            // Load MathJax from the local folder
            const script = document.createElement('script');
            script.src = '../MathJax/MathJax.js?config=TeX-AMS-MML_HTMLorMML';
            script.async = true;
            script.onload = () => {
                MathJax.Hub.Config({
                    tex2jax: {
                        inlineMath: [['$', '$'], ['\\(', '\\)']],
                        processEscapes: true
                    },
                    "HTML-CSS": {
                        styles: {
                            ".MathJax .math": {
                                "font-style": "normal"
                            }
                        }
                    }
                });
                MathJax.Hub.Startup.onload();
                resolve();
            };
            script.onerror = reject;
            document.head.appendChild(script);
        }
    });
}

// Add this function to create and append a style element
const addStyles = () => {
    const style = document.createElement('style');
    style.textContent = `
        .quiz-question-text-item {
            max-width: 100%;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        .quiz-answer-text-item {
            max-width: 100%;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
    `;
    document.head.appendChild(style);
}

// Add these variables at the beginning of the file
let score = 0;
let totalQuestions = 0;
let questionScores = [];

// New function to check answer correctness
const checkAnswer = (question, index) => {
    let rawScore = 0;
    if (question.type === 'single' || question.type === 'multiple') {
        if (question.entered.length > 0) {
            const correctAnswer = question.correct;
            const enteredAnswerIndex = parseInt(question.entered[0]) - 65;
            const enteredAnswer = question.answers[enteredAnswerIndex];
            
            if (question.type === 'single') {
                rawScore = enteredAnswer === correctAnswer ? 1 : 0;
            } else {
                // For multiple choice, you might need to implement a different logic
                // This is a placeholder for now
            }
        }
    } else if (question.type === 'short' || question.type === 'long') {
        // For future implementation of non-multiple choice questions
    }
    
    questionScores[index] = rawScore;
    return rawScore;
};

// Modified calculateScore function
const calculateScore = () => {
    totalQuestions = quiz.questions.length;
    score = questionScores.reduce((sum, score) => sum + score, 0);
    return (score / totalQuestions) * 100;
};

// Modify the init function to load MathJax before initializing the quiz
const init = async () => {
    await loadMathJax();
    addStyles();
    cr_ContinueButton();
    ad_QuestionIteration();
    loadQuestion(quiz.questions[0], true);
}

// Modify the loadQuestion function to typeset math after loading the question
const loadQuestion = async (question, init) => {
    removeAllChildren(`quiz-question-text-container`);
    removeAllChildren(`quiz-answer-list`);
    
    cr_QuizQuestionText(question.question);
    
    if (question.type == `multiple` || question.type == `single`) {
        loadMultipleChoiceQuestion(question);
        loadPreviousEnteredChoice(question.entered);
    } else if (question.type == `short` || question.type == `long`) {
        loadTextFormQuestion();
        loadPreviousEnteredText(question.entered);
    }
    
    // Skips loading animation on initialization
    if (!init) {
        await MoveQuestionContainerMiddle();
    }
    
    ShowHideContinueButton(question);
    
    // Typeset math after loading the question
    MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
}

// Creates elements for multiple choice questions (checkboxes & radios)
const loadMultipleChoiceQuestion = (question) => {
    // Generating answer elements
    let quizAnswersUL = document.getElementById(`quiz-answer-list`)
    // questionHTML.id
    for (let i = 0; i < question.answers.length; i++) {
        let quizQuestionDIV = document.createElement(`div`)
        quizQuestionDIV.className = `quiz-answer-text-container-single unselected-answer`
        // Assigns ID as ASCII values (A = 65, B = 66, etc.)
        quizQuestionDIV.id = (i + 65).toString()
        ad_QuizSelectAnswer(quizQuestionDIV)
        // Generate elements
        let quizQuestionPress = document.createElement(`li`)
        let quizQuestionNumerator = document.createElement(`li`)
        let quizQuestionText = document.createElement(`li`)
        // Adding elements to quiz answers
        ed_QuizQuestionElements(question.type, quizQuestionPress, quizQuestionNumerator, quizQuestionDIV, quizQuestionText)
        // Convert ASCII code to text for multiple choice selection
        quizQuestionNumerator.innerText = String.fromCharCode(i + 65)
        quizQuestionText.innerHTML = question.answers[i];
        // Psuedoparent append
        quizQuestionDIV.append(quizQuestionPress, quizQuestionNumerator, quizQuestionText)
        // Main parent append
        quizAnswersUL.appendChild(quizQuestionDIV)
    }
}

const loadTextFormQuestion = () => {
    // Generating answer elements
    let quizAnswersUL = document.getElementById(`quiz-answer-list`)
    let questionTextarea = document.createElement(`div`);
    questionTextarea.contentEditable = true
    questionTextarea.className = `form-control question-text-form answer-typed-input-form`;
    questionTextarea.setAttribute(`id`, `questionTextarea`);
    questionTextarea.setAttribute(`data-text`, `Enter answer here...`)
    questionTextarea.setAttribute(`onkeydown`, `SaveWrittenAnswers()`)
    questionTextarea.innerHTML = ``
    quizAnswersUL.append(questionTextarea)
}

// Saves short and long form objects to local object
const SaveWrittenAnswers = () => {
    quiz.questions[currentQuestionIndex].entered[0] = document.getElementById(`questionTextarea`).innerHTML;
    // Check the answer and update the score
    checkAnswer(quiz.questions[currentQuestionIndex], currentQuestionIndex);
    updateProgressBarStatus();
}


// Assigns answered question attributes to elements that have been entered by user previously
const loadPreviousEnteredChoice = (entered) => {
    for (let i = 0; i < entered.length; i++) {
        selectAnswer(entered[i], true)
    }
}

// re-assigns text to short/long form questions
const loadPreviousEnteredText = () => {
    let entered = quiz.questions[currentQuestionIndex].entered
    if (entered.length > 0) {
        let answer = document.getElementById(`questionTextarea`)
        answer.innerHTML = entered[0]
    }
}

// Moves question off screen in a given direction
const MoveQuestionContainer = (first = `up`, second = `down`) => {
    return new Promise((resolve, reject) => {
        // Assigning correct class
        first = `move-container-` + first
        second = `move-container-` + second
        let parent = document.getElementById(`quiz-question-container`);
        parent.classList.add(first, `fadeout`, `fast-transition`);
        setTimeout(() => {
            parent.classList.remove(first, `fast-transition`)
            parent.classList.add(`no-transition`, second)
            resolve()
        }, 200)
    })

}

// Re-centers question on page
const MoveQuestionContainerMiddle = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            let parent = document.getElementById(`quiz-question-container`);
            parent.classList.remove(`no-transition`, `fadeout`);
            parent.classList.add(`fast-transition`, `fadein`)
            parent.style.top = `0`
            parent.classList.remove(`move-container-down`, `move-container-up`)
            setTimeout(() => {
                parent.classList.remove(`fadein`)
                resolve()
            }, 200)
        }, 50)
    })
}

// Adds class names to quiz question based on which type of which it is
const ed_QuizQuestionElements = (type, press, numerator, container, text) => {
    // Append classes for different types of questions
    if (type == `single`) {
        // Radio button classes
        press.className = `press-key-label press-label-radio answer-key-numerator unselected-answer-button`
        numerator.className = `answer-key-numerator numerator-radio unselected-answer-button`
        container.classList.add(`question-type-single`)
    } else if (type == `multiple`) {
        // Checkbox classes
        press.className = `press-key-label press-label-checkbox answer-key-numerator unselected-answer-button`
        numerator.className = `answer-key-numerator numerator-checkbox unselected-answer-button`
        container.classList.add(`question-type-multiple`)
    }
    text.className = `quiz-answer-text-item`
    press.innerText = `Press`
}

// Assigns the question's text 
const cr_QuizQuestionText = (question) => {
    let quizQuestionTextDIV = document.getElementById(`quiz-question-text-container`);
    let quizQuestionTextSPAN = document.createElement(`span`);
    quizQuestionTextSPAN.className = `quiz-question-text-item`;
    quizQuestionTextSPAN.innerHTML = question;
    quizQuestionTextDIV.appendChild(quizQuestionTextSPAN);
}

// Creates continue button
const cr_ContinueButton = () => {
    let continueDIV = document.createElement(`div`)
    let continueBUTTON = document.createElement(`button`)
    let continueSPAN = document.createElement(`span`)
    continueDIV.id = `quiz-continue-button-container`
    continueDIV.className = `quiz-continue-button-container`
    continueBUTTON.className = `quiz-continue-button`
    continueSPAN.className = `quiz-continue-text`
    continueSPAN.id = `quiz-continue-text`
    continueBUTTON.innerHTML = `OK`
    // Moves to next question on click or ends quiz if it's the last question
    continueBUTTON.onclick = function() {
        if (currentQuestionIndex >= quiz.questions.length - 1) {
            endQuiz();
        } else {
            loadNewQuestion(`next-question-load`);
            updateProgressBarStatus();
        }
    }
    continueSPAN.innerHTML = `press ENTER`
    continueDIV.append(continueBUTTON, continueSPAN)
    let parent = document.getElementById(`quiz-question-container`)
    parent.append(continueDIV)
    // Discerns whether or not to show continue button, based on whether or not an answer has been input/selected
    ShowHideContinueButton(quiz.questions[currentQuestionIndex])
}

// Add this new function to handle the end of the quiz
const endQuiz = () => {
    const finalScore = calculateScore();
    displayFinalScore(finalScore);
}

// Only shows a continue button if a question is selected
const ShowHideContinueButton = (question) => {
    const continueButtonContainer = document.getElementById(`quiz-continue-button-container`);
    const continueText = document.getElementById(`quiz-continue-text`);
    const answerList = document.getElementById(`quiz-answer-list`);

    if (!continueButtonContainer || !continueText) {
        console.error('Continue button elements not found');
        return;
    }

    if (question.type === 'short' || question.type === `long`) {
        continueButtonContainer.style.display = `initial`;
        continueText.style.display = `none`;
    } else {
        continueText.style.display = `initial`;
        
        if (!answerList) {
            console.error('Answer list element not found');
            continueButtonContainer.style.display = `none`;
            return;
        }

        // Checks if an answer has been selected. If so, shows continue button
        const hasSelectedAnswer = Array.from(answerList.children).some(child => 
            child.classList.contains(`selected-answer`)
        );

        continueButtonContainer.style.display = hasSelectedAnswer ? `initial` : `none`;
    }
}

// Function to load next question & possible answers in object
const loadNewQuestion = async (adjustment) => {
    // Saves written answers before moving on to next question
    let type = quiz.questions[currentQuestionIndex].type
    if (type == 'long' || type == 'short') {
        SaveWrittenAnswers()
    }
    // Removes previous question & answers
    if (canLoadNewQuestion(adjustment)) {
        await QuestionContainerLoad(adjustment)
        removeAllChildren(`quiz-answer-list`)
        removeAllChildren(`quiz-question-text-container`)
        // Displays previous questions. Does nothing if no questions to load.
        if (adjustment == `previous-question-load`) {
            loadQuestion(quiz.questions[currentQuestionIndex])
        // Displays next question. Does nothing if no questions to load.
        } else if (adjustment == `next-question-load` && currentQuestionIndex < quiz.questions.length) {
            loadQuestion(quiz.questions[currentQuestionIndex])
        }
    }
}

// Checks if we have reached the first or last question
const canLoadNewQuestion = (adjustment) => {
    // In/de-crement based on if user is loading next or previous question
    if (adjustment == `next-question-load`) {
        currentQuestionIndex++
    } else {
        currentQuestionIndex--
    }
    // Fail safe if we have reached last quesiton
    if (currentQuestionIndex > quiz.questions.length - 1) {
        currentQuestionIndex--
        return false
        // Fail safe if trying to move before first question
    } else if (currentQuestionIndex < 0) {
        currentQuestionIndex++
        return false
    }
    return true

}

// Discerns which direction the question will fly on/off the page
const QuestionContainerLoad = (adjustment) => {
    return new Promise(async (resolve, reject) => {
        if (adjustment == 'next-question-load') {
            // Moves container up off the screen
            await MoveQuestionContainer(`up`, `down`)
        } else {
            // Moves container down off the screen
            await MoveQuestionContainer(`down`, `up`)
        }
        resolve()
    })
}

// Highlights and unhighlights given answers when a keytap is pressed 
// key indicates the id of the given answer, invoking previous will prevent the function from editing the local answered questions object
const selectAnswer = (key, previous) => {
    let answer = document.getElementById(key)
    if (answer) {
        // If only one answer can be given, unselect all answers before reselecting new answer
        if (answer.classList.contains(`question-type-single`)) {
            unselectAllAnswers(document.getElementById('quiz-answer-list'))
        }
        // If answer is not yet selected, select it
        if (answer.classList.contains(`unselected-answer`)) {
            answer.classList.add(`selected-answer`)
            answer.classList.remove(`unselected-answer`)
            indicateSelectedAnswer(answer)
            if (!previous) {
                storeAnswers(true, key);
                // Check the answer and update the score
                checkAnswer(quiz.questions[currentQuestionIndex], currentQuestionIndex);
                updateProgressBarStatus();
            }
        } else if (answer.classList.contains(`selected-answer`)) {
            answer.classList.add(`unselected-answer`)
            answer.classList.remove(`selected-answer`)
            // Unhighlight selected answer buttons
            unselectAnswerButton(answer.children)
            if (!previous) {
                storeAnswers(false, key);
            }
        }
    }
    // Triggers a check to see if we should display continue button
    ShowHideContinueButton(quiz.questions[currentQuestionIndex])
}

// Indicate previous is true in order to skip storing answers in the local object
const storeAnswers = (add, key) => {
    // For adding user's answers to the local object
    if (add) {
        if (quiz.questions[currentQuestionIndex].type == `single`) {
            quiz.questions[currentQuestionIndex].entered.length = 0
        }
        quiz.questions[currentQuestionIndex].entered.push(key)
        // For removing user's answers from the local object
    } else {
        quiz.questions[currentQuestionIndex].entered = quiz.questions[currentQuestionIndex].entered.filter(item => item !== key)
    }
    // Ensures there are no duplicate answers in array
    quiz.questions[currentQuestionIndex].entered = uniq(quiz.questions[currentQuestionIndex].entered)
}

// Changes answer button appearance to show as selected
const indicateSelectedAnswer = (answer) => {
    let button = answer.querySelectorAll('.answer-key-numerator')
    for (let i = 0; i < button.length; i++) {
        button[i].classList.add(`selected-answer-button`)
        button[i].classList.remove(`unselected-answer-button`)
    }
}

// Unselects all answers in a question
const unselectAllAnswers = (answerList) => {
    for (let i = 0; i < answerList.childElementCount; i++) {
        let child = answerList.children[i]
        if (child.classList.contains(`selected-answer`)) {
            child.classList.add(`unselected-answer`)
            child.classList.remove(`selected-answer`)
        }
        // re/un-assigns children attribute elements, such as button coloring classes
        unselectAnswerButton(child.children)
    }
}

// Unselects individual quiz answer buttons (e.g. Press A)
const unselectAnswerButton = (child) => {
    for (let j = 0; j < child.length; j++) {
        let childButton = child[j]
        if (childButton && childButton.classList.contains(`selected-answer-button`)) {
            childButton.classList.add(`unselected-answer-button`)
            childButton.classList.remove(`selected-answer-button`)
        }
    }
}

// Change progress bar styling as quiz is completed
const updateProgressBarStatus = () => {
    // Assigning attributes
    let progress = document.getElementById('quiz-progress-bar')
    let text = document.getElementById('progress-bar-text')
    // Value of progress is set in terms of 0 to 100
    let value = Math.floor((calculateQuizProgress(quiz.questions) / quiz.questions.length) * 100)
    // Changing width and aria value 
    progress.setAttribute('aria-valuenow', value)
    progress.style.width = value + `%`
    // Updates progress bar text
    text.innerText = value + '% complete'
}

// Finds quiz progress by comparing num of questions answers to total number of questions
const calculateQuizProgress = (questions) => {
    let answers = 0
    for (let i = 0; i < questions.length; i++) {
        if (questions[i].entered.length > 0) {
            answers++
        }
    }
    return answers
}

// Assigns function to change answer attributes with given id
const ad_QuizSelectAnswer = (answer) => {
    answer.onclick = () => {
        selectAnswer(answer.id)
    }
}

// Adds iteration capabilities to previous & next buttons 
const ad_QuestionIteration = () => {
    let prev = document.getElementById(`previous-question-load`)
    let next = document.getElementById(`next-question-load`)
    prev.onclick = () => {
        loadNewQuestion(prev.id)
    }
    next.onclick = () => {
        loadNewQuestion(next.id)
    }
}

// Add this function to display the final score
const displayFinalScore = (finalScore) => {
    removeAllChildren('quiz-question-container');
    const scoreContainer = document.createElement('div');
    scoreContainer.className = 'final-score-container';
    scoreContainer.innerHTML = `
        <h2>Quiz Completed!</h2>
        <p>Your score: ${finalScore.toFixed(2)}%</p>
        <p>Correct answers: ${score} out of ${totalQuestions}</p>
    `;
    document.getElementById('quiz-question-container').appendChild(scoreContainer);
};

// Listener for key presses for quiz interaction.
document.onkeydown = function(evt) {
    evt = evt || window.event;
    // Registers key selectors for A to J on multiple choice questions.
    if (evt.keyCode >= 65 && evt.keyCode < 90 || evt.keyCode == 8 || evt.keyCode == 46) {
        selectAnswer(evt.keyCode.toString());
        updateProgressBarStatus();
    }
    if (evt.keyCode == 38) {
        loadNewQuestion('previous-question-load');
        updateProgressBarStatus();
    }
    // Moves to next question on down arrow tap or enter. Disables iteration using enter key for open ended questions
    let type = quiz.questions[currentQuestionIndex].type;
    if (evt.keyCode == 40 || ((type == `single` || type == `multiple`) && evt.keyCode == 13)) {
        if (currentQuestionIndex >= quiz.questions.length - 1) {
            endQuiz();
        } else {
            loadNewQuestion('next-question-load');
            updateProgressBarStatus();
        }
    }
};