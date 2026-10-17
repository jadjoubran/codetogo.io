import { defineCollection } from "astro:content";
import { glob } from "astro/loaders";
import { z } from "astro/zod";

// Accepts YAML dates (2024-02-26) as well as strings such as "2018-03-6",
// always interpreted as midnight UTC.
const date = z.preprocess(value => {
    if (typeof value === "string") {
        const match = value.match(/^(\d{4})-(\d{1,2})-(\d{1,2})$/);
        if (match) {
            return new Date(Date.UTC(+match[1], +match[2] - 1, +match[3]));
        }
    }
    return value;
}, z.coerce.date());

const usecase = (base: string) =>
    defineCollection({
        loader: glob({
            pattern: "*.md",
            base,
            // Keep the filename as-is (e.g. fetch-XML) since it is part of the URL
            generateId: ({ entry }) => entry.replace(/\.md$/, "")
        }),
        schema: z.object({
            date,
            category: z.string().optional(),
            link: z.string().optional(),
            reference: z.string().optional(),
            reference_website: z.string().optional(),
            related: z.string().optional(),
            author: z.string().optional()
        })
    });

export const collections = {
    jsusecases: usecase("./source/_jsusecases"),
    reactusecases: usecase("./source/_reactusecases")
};
