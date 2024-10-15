// Serve an object with this structure in order to generate a quiz page
// The `correct` key is referential and should not be served
const quiz = {
    "name": "SPM Mathematics Quiz Set 1",
    "questions": [{
        "type": "single",
        "question": "Simplify: $(2x + 3)(x - 1) - (x + 2)(x + 1)$",
        "answers": ["$x^2 - 5$", "$x^2 - 1$", "$x^2 + 1$", "$x^2 - 4x - 1$"],
        "entered": [],
        "correct": "$x^2 - 5$"
    },
    {
        "type": "single",
        "question": "Solve the equation: 2(x + 3) = 5x - 7",
        "answers": ["x = 5", "x = 13/3", "x = 4", "x = 10/3"],
        "entered": [],
        "correct": "x = 13/3"
    },
    {
        "type": "single",
        "question": "Find the gradient of the line passing through the points (2, 5) and (4, 9).",
        "answers": ["1", "2", "3", "4"],
        "entered": [],
        "correct": "2"
    },
    {
        "type": "single",
        "question": "What is the area of a triangle with base 8 cm and height 6 cm?",
        "answers": ["24 cm²", "48 cm²", "12 cm²", "16 cm²"],
        "entered": [],
        "correct": "24 cm²"
    },
    {
        "type": "single",
        "question": "If f(x) = 2x² + 3x - 1, what is f(-2)?",
        "answers": ["3", "5", "7", "9"],
        "entered": [],
        "correct": "5"
    },
    {
        "type": "single",
        "question": "Solve the simultaneous equations: 2x + y = 7 and x - y = 1",
        "answers": ["x = 3, y = 1", "x = 2, y = 3", "x = 4, y = -1", "x = 1, y = 5"],
        "entered": [],
        "correct": "x = 3, y = 1"
    },
    {
        "type": "single",
        "question": "What is the value of sin 30°?",
        "answers": ["1/4", "1/2", "√3/2", "√2/2"],
        "entered": [],
        "correct": "1/2"
    },
    {
        "type": "single",
        "question": "Find the value of x if log₂x = 3.",
        "answers": ["6", "8", "10", "12"],
        "entered": [],
        "correct": "8"
    },
    {
        "type": "single",
        "question": "What is the probability of rolling an even number on a fair six-sided die?",
        "answers": ["1/6", "1/3", "1/2", "2/3"],
        "entered": [],
        "correct": "1/2"
    }
]
};
