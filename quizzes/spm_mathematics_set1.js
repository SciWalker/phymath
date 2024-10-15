// Serve an object with this structure in order to generate a quiz page
// The `correct` key is referential and should not be served
const quiz = {
    "name": "Psychology Quiz",
    "questions": [{
        "type": "single",
        "question": "Which is not a step in the scientific method?",
        "answers": ["Ask question", "Form hypothesis", "Replicate results", "Collect data", "Analysis"],
        "entered": [],
        "correct": "Replicate results"
    },
    {
        "type": "single",
        "question": "_____ explanations for aggressive behavior include genetic predisposition, high testosterone level and frontal lobe damage.",
        "answers": ["Social", "Biological", "Cross-cultural", "Cognitive", "Psychoactive"],
        "entered": [],
        "correct": "Biological"
    },
    {
        "type": "single",
        "question": "Social identity refers to _____.",
        "answers": ["Our membership in particular groups, which largely determines our everyday interactions", "Prejudices that are based on personal experiences that occur during development", "The drive for success that motivates people to form prejudices about their competitors", "All of the answers are correct."],
        "entered": [],
        "correct": "Replicate results"
    },
    {
        "type": "multiple",
        "question": "The belief that everyone is good and naturally altruistic is an example of which psychological perspective?",
        "answers": ["Biological", "Cognitive", "Behavioral", "Evolutionary", "Humanistic"],
        "entered": [],
        "correct": "Humanistic"
    },
    {
        "type": "short",
        "question": "Please describe in two sentences or less what psychoanalysis is.",
        "entered": [],
        "answers": []
    },
    {
        "type": "long",
        "question": "In three paragraphs, describe Freud's theory of id, ego, and superego. Use examples as needed.",
        "entered": [],
        "answers": []
    }
]
};
