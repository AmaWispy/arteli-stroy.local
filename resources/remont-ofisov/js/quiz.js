(function() {

    const questions = [
        {
            question: 'Тип ремонта',
            answers: [
                {
                    value: 'Косметический',
                    type: 'radio'
                },
                {
                    value: 'Капитальный',
                    type: 'radio'
                }, 
                {
                    value: 'Черновой',
                    type: 'radio'
                }, 
                {
                    value: 'Дизайнерский ремонт',
                    type: 'radio'
                }, 
                {
                    value: 'Евроремонт',
                    type: 'radio'
                }, 
                {
                    value: 'Премиум класса',
                    type: 'radio'
                }
            ],
            type: 'single'
        },
        {
            question: 'Материалы',
            answers: [
                {
                    value: 'С черновыми',
                    type: 'radio'
                },
                {
                    value: 'С чистовыми',
                    type: 'radio'
                }, 
                {
                    value: 'Под ключ',
                    type: 'radio'
                }, 
                {
                    value: 'Куплю сам(а)',
                    type: 'radio'
                }
            ],
            type: 'single'
        },
        {
            question: 'В какие сроки вам необходим ремонт?',
            answers: [
                {
                    value: 'Как можно скорее',
                    type: 'radio'
                },
                {
                    value: 'Через неделю',
                    type: 'radio'
                }, 
                {
                    value: 'По договоренности',
                    type: 'radio'
                }, 
                {
                    value: 'Интересуюсь на перспективу',
                    type: 'radio'
                }
            ],
            type: 'single'
        },
        {
            question: 'Нужен ли монтаж новых инженерных систем?',
            answers: [
                {
                    value: 'Да',
                    type: 'radio'
                },
                {
                    value: 'Нет',
                    type: 'radio'
                }, 
                {
                    value: 'Другое',
                    type: 'text'
                }
            ],
            type: 'single'
        },
        {
            question: 'Требуется ли вам перепланировка?',
            answers: [
                {
                    value: 'Да',
                    type: 'radio'
                },
                {
                    value: 'Нет',
                    type: 'radio'
                }
            ],
            type: 'single'
        },
        {
            question: 'Уточните размеры помещения',
            answers: [
                {
                    value: 'Площадь помещения',
                    type: 'input'
                },
                {
                    value: 'Высота потолков',
                    type: 'input'
                },
                {
                    value: 'Требуется ли выезд специалиста?',
                    type: 'input'
                }
            ],
            type: 'every'
        },
    ];

    const results = [];

    const quizBtn = document.querySelector('#showquiz');
    const quiz = document.querySelector('.quiz');
    const closeBtn = quiz.querySelector('[data-close]');
    const question = quiz.querySelector('.quiz__question');
    const prevBtn = quiz.querySelector('[data-prev]');
    const nextBtn = quiz.querySelector('[data-next]');
    const progress = quiz.querySelector('.quiz-indicator__progress');
    const progressBar = quiz.querySelector('.quiz-indicator__progress-bar');
    const formContent = quiz.querySelector('.quiz__form-content');
    const form = formContent.querySelector('.quiz__form');

    const showQuiz = () => {
        quiz.style.display = 'block';
        renderQuestion();
    };

    quizBtn.addEventListener('click', showQuiz);

    const hideQuiz = () => {
        results.length = 0;

        question.style.display = '';
        prevBtn.style.display = '';
        nextBtn.style.display = '';
        progress.style.display = '';
        progressBar.style.display = '';
        document.querySelector('.quiz__title').style.display = '';

        formContent.style.display = 'none'; 

        quiz.style.display = 'none';
    };

    closeBtn.addEventListener('click', hideQuiz);

    const renderQuestion = (index = 0) => {
        renderProgress(index + 1);

        question.dataset.currentStep = index;

        const renderAnswers = () => questions[index].answers
            .map((answer, answerIndex) => {
                if(answer.type === 'radio') {
                    return `<li class="quiz__answer-item">
                                <label class="quiz__answer-label">
                                    <input class="quiz__answer-input" 
                                           type="radio" 
                                           name=${index} 
                                           value=${answerIndex}
                                    >
                                    <span class="quiz__radio-input">${answer.value}</span>
                                </label>
                            </li>`;
                }

                if(answer.type === 'text') {
                    return `<li class="quiz__answer-item">
                                <label class="quiz__answer-label">
                                    <input data-is-textarea="true"
                                           class="quiz__answer-input" 
                                           type="radio" 
                                           name=${index} 
                                           value=${answerIndex}
                                    >
                                    <span class="quiz__radio-input"></span>
                                    <input data-value=${answerIndex} 
                                           class="quiz__answer-textarea" 
                                           type="text" 
                                           placeholder="${answer.value}"
                                    >
                                </label>
                            </li>`;
                }

                if(answer.type === 'input') {
                    return `<li class="quiz__answer-item">
                                <label class="quiz__answer-label quiz__answer-label_pd20">
                                    <input data-value=${answerIndex} 
                                           data-type="input"
                                           class="quiz__answer-textarea" 
                                           type="text" 
                                           placeholder="${answer.value}"
                                    >
                                </label>
                            </li>`;
                }
            }
            
            )
            .join('');

        question.innerHTML = `
            <div data-type=${questions[index].type} class="quiz__question-title">${questions[index].question}</div>
            <ul class="quiz__question-answers">${renderAnswers()}</ul>
        `;
    };

    const renderProgress = (currentStep) => {
        progress.textContent = `Вопрос ${currentStep} из ${questions.length}`;

        const currentProgressBar = document.createElement('div');
        currentProgressBar.classList.add('quiz-indicator__current-progress-bar');
        currentProgressBar.style.width = 100 * currentStep / questions.length + '%';
        progressBar.innerHTML = '';
        progressBar.append(currentProgressBar);
    };

    const renderForm = () => {
        question.style.display = 'none';
        prevBtn.style.display = 'none';
        nextBtn.style.display = 'none';
        progress.style.display = 'none';
        progressBar.style.display = 'none';
        document.querySelector('.quiz__title').style.display = 'none';

        formContent.style.display = 'block'; 
    };

    const validateForm = () => {
        const phone = form.querySelector('[data-phone]');
        const maskOptions = {
            mask: '+{7}(000)000-00-00'
          };
        const mask = IMask(phone, maskOptions);
    };

    validateForm();

    const postData = async (url, body) => {
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-type': 'application/json'
            },
            body: body
        });

        return await response.json();
    };

    
    const showMessage = (message) => {
        formContent.style.display = 'none';
        const messageContent = document.createElement('div');
        messageContent.classList.add('quiz__form-title');
        messageContent.textContent = message;

        document.querySelector('.quiz__content').append(messageContent);

        intervalId = setTimeout(() => {
            messageContent.remove();
            formContent.style.display = '';
            hideQuiz();
        }, 4000);
    };

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const formData = new FormData(form);

        let json = Object.fromEntries(formData.entries());
        json.answers = results;
        json = JSON.stringify(json);

        postData('quiz', json)
            .then(response => {
                console.log(response);
                showMessage(response.message);
            })
            .catch(err => {
                console.error(err);
                showMessage(err.message);
            })
            .finally(() => {
                form.reset();
            });

    });

    quiz.addEventListener('change', (e) => {

        if(e.target.getAttribute('type') === 'text' || e.target.getAttribute('data-is-textarea')) {return;}

        setTimeout(() => {
            const nextQuestionIndex = +question.dataset.currentStep + 1;

            const obj = {
                [`${questions[nextQuestionIndex - 1].question}`]: `${questions[nextQuestionIndex - 1]
                    .answers[e.target.value].value}`
            };
            results.push(obj);

            if(questions.length === nextQuestionIndex) {
                renderForm();
            } else {
                renderQuestion(nextQuestionIndex);
                prevBtn.disabled = false;
            }
            
            nextBtn.disabled = true;
        }, 500);
    });

    let inputValue = '';
    const inputAnswers = [];

    quiz.addEventListener('input', (e) => {
        if(e.target.getAttribute('type') !== 'text' || e.target.getAttribute('data-form')) {return;}

        if(e.target.getAttribute('data-type') === 'input') {
            const inputs = question.querySelectorAll('.quiz__answer-textarea');
            
            inputs.forEach((input, index) => {
                const obj = {
                    [input.placeholder]: input.value
                };
                inputAnswers[index] = obj;
            });

            if(inputAnswers.every(answer => {
                return Object.values(answer)[0];
            })) {
                nextBtn.disabled = false;
            } else {
                nextBtn.disabled = true;
            }
        } else {
            if(e.target.value.length > 0) {
                const parent = e.target.parentNode;
                parent.classList.add('quiz__answer-label_checked');
                parent.firstElementChild.checked = true;

                inputValue = e.target.value;

                nextBtn.disabled = false;
            } else {
                parent.classList.remove('quiz__answer-label_checked');
                nextBtn.disabled = true;
            }
        }
    });

    prevBtn.addEventListener('click', () => {
        results.pop();
        renderQuestion(+question.dataset.currentStep - 1);

        if(+question.dataset.currentStep < 1) {
            prevBtn.disabled = true;
        }
    });

    nextBtn.addEventListener('click', () => {
        const nextQuestionIndex = +question.dataset.currentStep + 1;

        const obj = {};

        if(question.firstElementChild.getAttribute('data-type') === 'every') {
            obj[`${questions[nextQuestionIndex - 1].question}`] = inputAnswers;
        } else {
            obj[`${questions[nextQuestionIndex - 1].question}`] = inputValue;
        }

        results.push(obj);

        if(questions.length === nextQuestionIndex) {
            renderForm();
        } else {
            renderQuestion(nextQuestionIndex);
            prevBtn.disabled = false;
        }
        
        nextBtn.disabled = true;
    });

}());