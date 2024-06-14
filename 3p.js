const wordSearchContainer = document.getElementById('wordSearch');
const questionList = document.getElementById('questionList');
const helpButton = document.getElementById('helpButton');
const checkButton = document.getElementById('checkButton');
const resultsDiv = document.getElementById('results');
const backButton = document.getElementById('backButton');

backButton.addEventListener('click', () => {
    window.history.back();
});

const wordSearchText = [
    "C u a n d o y o e r a n i ñ o , m e g u s t a b a n m u c h o l o s c u e n t o s d e h a d a s , p e r o a h o r a q u e s o y m a y o r , l o s p r e f i e r o d e l e j o s .",
    "P o r q u e l o s c u e n t o s d e h a d a s h a b l a n d e d r a g o n e s q u e s o n v e n c i d o s , d e g i g a n t e s q u e s o n d e r r o t a d o s , y d e d i f i c u l t a d e s q u e s o n s u p e r a d a s .",
    "A h o r a s é q u e e s t o e s s o l o u n a s i m p l e f i c c i ó n .",
    "P e r o l a s p e r s o n a s g r a n d e s s e o l v i d a n d e e s t o ."
];

const questions = [
    { question: "1. ¿Qué le gustaban mucho cuando era niño?", answer: "cuentosdehadas" },
    { question: "2. ¿Qué prefiero ahora que soy mayor?", answer: "lejos" },
    { question: "3. ¿Qué hablan los cuentos de hadas?", answer: "dragones gigantes dificultades" }
];

let selectedLetters = [];

wordSearchText.forEach(row => {
    const divRow = document.createElement('div');
    divRow.classList.add('row');
    row.split(' ').forEach(letter => {
        const cell = document.createElement('div');
        cell.classList.add('cell');
        cell.textContent = letter;
        cell.addEventListener('click', () => {
            if (!cell.classList.contains('selected')) {
                selectedLetters.push(cell);
            } else {
                selectedLetters = selectedLetters.filter(item => item !== cell);
            }
            cell.classList.toggle('selected');
        });
        divRow.appendChild(cell);
    });
    wordSearchContainer.appendChild(divRow);
});

questions.forEach(question => {
    const li = document.createElement('li');
    li.textContent = question.question;
    questionList.appendChild(li);
});

function checkAnswers() {
    let correctCount = 0;
    let resultHTML = '<p>Respuestas:</p><ul>';

    questions.forEach((q, index) => {
        const answerLetters = q.answer.split('').filter(letter => letter !== ' ');
        const selectedText = selectedLetters.map(cell => cell.textContent).join('');
        let isCorrect = true;

        answerLetters.forEach(letter => {
            if (!selectedText.includes(letter)) {
                isCorrect = false;
            }
        });

        if (isCorrect) {
            correctCount++;
            resultHTML += `<li>Respuesta ${index + 1}: Correcta (${q.answer})</li>`;
            selectedLetters.forEach(cell => {
                if (q.answer.includes(cell.textContent.toUpperCase())) {
                    cell.classList.add('correct');
                }
            });
        } else {
            resultHTML += `<li>Respuesta ${index + 1}: Incorrecta (La respuesta correcta es: ${q.answer})</li>`;
            selectedLetters.forEach(cell => {
                if (!q.answer.includes(cell.textContent.toUpperCase())) {
                    cell.classList.add('incorrect');
                }
            });
        }
    });

    resultHTML += `</ul><p>Total de respuestas correctas: ${correctCount} de ${questions.length}</p>`;
    resultsDiv.innerHTML = resultHTML;
}

checkButton.addEventListener('click', () => {
    document.querySelectorAll('.cell').forEach(cell => {
        cell.classList.remove('correct', 'incorrect');
    });
    checkAnswers();
});

helpButton.addEventListener('click', () => {
    let helpText = '';
    questions.forEach(q => {
        helpText += `${q.question} - ${q.answer}\n`;
    });
    alert(helpText);
});
