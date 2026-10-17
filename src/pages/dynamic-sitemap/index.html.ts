import type { APIRoute } from "astro";
import { getUsecases, url, type CollectionName } from "../../lib/usecases";

const site = "https://codetogo.io";

const usecaseUrls = async (collection: CollectionName) =>
    (await getUsecases(collection)).map(entry => `${site}/${url(entry.id, collection)}/`);

// Plain list of URLs, served at /dynamic-sitemap/ as before
export const GET: APIRoute = async () => {
    const urls = [
        `${site}/`,
        `${site}/all/`,
        `${site}/about/`,
        `${site}/javascript/`,
        ...(await usecaseUrls("jsusecases")),
        `${site}/react/`,
        ...(await usecaseUrls("reactusecases"))
    ];
    return new Response(urls.join("\n") + "\n");
};
