import { getCollection, type CollectionEntry } from "astro:content";

export type CollectionName = "jsusecases" | "reactusecases";
export type Usecase = CollectionEntry<CollectionName>;

export const types = {
    jsusecases: {
        type: "javascript",
        formattedType: "JavaScript",
        learnBtn:
            '<div style="text-align: center"><a href="https://learnjavascript.online/?utm_source=codetogo.io" target="_blank" rel="noopener" class="learn-btn learn-javascript">Learn JavaScript step by step</a></div>'
    },
    reactusecases: {
        type: "react",
        formattedType: "React",
        learnBtn:
            '<a href="https://react-tutorial.app/?utm_source=codetogo.io" target="_blank" rel="noopener" class="learn-btn learn-react">Step by step React Tutorial</a>'
    }
} as const;

export const question = (id: string, collection: CollectionName) =>
    `How to ${id.replaceAll("-", " ")} in ${types[collection].formattedType}`;

export const url = (id: string, collection: CollectionName) =>
    `how-to-${id}-in-${types[collection].type}`;

export const getUsecases = async (collection: CollectionName) => {
    const usecases: Usecase[] = await getCollection(collection);
    // Case-insensitive filename order, same as Jigsaw
    const key = (entry: Usecase) => entry.id.toLowerCase();
    return usecases.sort((a, b) => (key(a) < key(b) ? -1 : key(a) > key(b) ? 1 : 0));
};

// "Feb 26, 2024"
export const formatDate = (date: Date) =>
    date.toLocaleDateString("en-US", {
        month: "short",
        day: "2-digit",
        year: "numeric",
        timeZone: "UTC"
    });

// "2024-02-26T00:00:00+00:00"
export const isoDate = (date: Date) =>
    date.toISOString().replace(/\.\d{3}Z$/, "+00:00");
